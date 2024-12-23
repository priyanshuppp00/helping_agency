<?php
session_start();
require '../php/db_connect.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = isset($_POST['email']) ? trim($_POST['email']) : '';

  // Validate the email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['message'] = 'Invalid email address.';
    $_SESSION['message_type'] = 'danger';
    header("Location: ../forget_password.php");
    exit;
  }

  // Check if email exists
  $stmt = $conn->prepare("SELECT id, username FROM users WHERE email = ?");
  if (!$stmt) {
    $_SESSION['message'] = 'Database query error.';
    $_SESSION['message_type'] = 'danger';
    header("Location: ../forget_password.php");
    exit;
  }

  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Generate a unique reset token
    $reset_token = bin2hex(random_bytes(16));

    // Store the reset token in the database with a timestamp
    $stmt = $conn->prepare("UPDATE users SET reset_token = ?, reset_token_expiry = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE id = ?");
    if ($stmt) {
      $stmt->bind_param("si", $reset_token, $user['id']);
      $stmt->execute();
      $stmt->close();
    }

    // Send reset email with link
    $reset_link = "http://yourdomain.com/reset_password.php?token=$reset_token";
    mail($email, "Password Reset Request", "Hello " . $user['username'] . ",\n\nClick the link below to reset your password:\n$reset_link\n\nIf you did not request this, please ignore this email.");

    $_SESSION['message'] = 'A password reset link has been sent to your email.';
    $_SESSION['message_type'] = 'success';
  } else {
    $_SESSION['message'] = 'Email address not found.';
    $_SESSION['message_type'] = 'danger';
  }

  header("Location: ../login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/nav.css">
  <link rel="stylesheet" href="../assets/css/support.css">
  <link rel="stylesheet" href="../assets/css/sticky.css">
</head>

<body>

  <?php include '../includes/navbar.php'; ?>

  <section class="login py-5">
    <div class="container py-5 mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 ">
          <h2 class="text-center mb-4">Forgot Password</h2>

          <?php
          if (isset($_SESSION['message'])) {
            echo "<div class='alert alert-" . $_SESSION['message_type'] . "'>" . $_SESSION['message'] . "</div>";
            unset($_SESSION['message'], $_SESSION['message_type']);
          }
          ?>

          <form action="../forget_password.php" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send Reset Link</button>
            <p class="text-center mt-3"><a href="login.php">Back to Login</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include '../includes/sticky.php'; ?>
  <?php include '../includes/support.php'; ?>
  <!-- Footer -->
  <?php include '../includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/support.js"></script>
</body>

</html>