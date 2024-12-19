<?php
session_start();
require 'php/db_connect.php'; // Include database connection

if (isset($_GET['token'])) {
  $reset_token = $_GET['token'];

  // Verify token
  $stmt = $conn->prepare("SELECT id, username FROM users WHERE reset_token = ? AND reset_token_expiry > NOW()");
  if (!$stmt) {
    $_SESSION['message'] = 'Database query error.';
    $_SESSION['message_type'] = 'danger';
    header("Location: login.php");
    exit;
  }

  $stmt->bind_param("s", $reset_token);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    $user_id = $user['id'];
  } else {
    $_SESSION['message'] = 'Invalid or expired reset token.';
    $_SESSION['message_type'] = 'danger';
    header("Location: login.php");
    exit;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['csrf_token']) && hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
      $new_password = isset($_POST['new_password']) ? $_POST['new_password'] : '';
      $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

      if ($new_password === $confirm_password) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Update the password
        $stmt = $conn->prepare("UPDATE users SET password = ?, reset_token = NULL, reset_token_expiry = NULL WHERE id = ?");
        if ($stmt) {
          $stmt->bind_param("si", $hashed_password, $user_id);
          $stmt->execute();
          $stmt->close();

          $_SESSION['message'] = 'Your password has been reset successfully.';
          $_SESSION['message_type'] = 'success';
          header("Location: login.php");
          exit;
        } else {
          $_SESSION['message'] = 'Error updating password.';
          $_SESSION['message_type'] = 'danger';
        }
      } else {
        $_SESSION['message'] = 'Passwords do not match.';
        $_SESSION['message_type'] = 'danger';
      }
    } else {
      $_SESSION['message'] = 'CSRF validation failed.';
      $_SESSION['message_type'] = 'danger';
      header("Location: login.php");
      exit;
    }
  }
} else {
  $_SESSION['message'] = 'Invalid request.';
  $_SESSION['message_type'] = 'danger';
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

  <?php include 'includes/navbar.php'; ?>

  <section class="login py-5">
    <div class="container py-5 mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h2 class="text-center mb-4">Reset Password</h2>

          <?php
          if (isset($_SESSION['message'])) {
            echo "<div class='alert alert-" . $_SESSION['message_type'] . "'>" . $_SESSION['message'] . "</div>";
            unset($_SESSION['message'], $_SESSION['message_type']);
          }
          ?>

          <form action="reset_password.php?token=<?php echo $reset_token; ?>" method="POST">
            <div class="mb-3">
              <label for="new_password" class="form-label">New Password</label>
              <input type="password" class="form-control" id="new_password" name="new_password" required>
            </div>
            <div class="mb-3">
              <label for="confirm_password" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <button type="submit" class="btn btn-primary w-100">Reset Password</button>
            <p class="text-center mt-3"><a href="login.php">Back to Login</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/sticky.php'; ?>
  <?php include 'includes/support.php'; ?>
  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>