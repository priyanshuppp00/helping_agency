<?php
include '../php/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Helping Agency</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/nav.css">
  <link rel="stylesheet" href="../assets/css/sticky.css">
  <link rel="stylesheet" href="../assets/css/support.css">
</head>

<body>
  <?php include '../includes/navbar.php'; ?>

  <section class="login py-5">
    <div class="container py-5 mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
          <h2 class="text-center mb-4">Login</h2>

          <?php
          // Display feedback messages
          if (isset($_SESSION['message'])) {
            echo "<div class='alert alert-" . $_SESSION['message_type'] . "'>" . $_SESSION['message'] . "</div>";
            unset($_SESSION['message'], $_SESSION['message_type']);
          }
          ?>

          <form action="../php/login_process.php" method="POST">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>

          <button id="google-login-button" class="btn btn-danger w-100 mt-3">Login with Google</button>
          <p class="text-center mt-3"><a href="../code/forget_password.php">Forgot Password?</a></p>
          <p class="text-center mt-3">Don't have an account? <a href="../code/register.php">Register here</a>.</p>
        </div>
      </div>
    </div>
  </section>

  <?php include '../includes/sticky.php'; ?>
  <?php include '../includes/support.php'; ?>
  <!-- Footer -->
  <?php include '../includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://accounts.google.com/gsi/client" async defer></script>
  <script src="../assets/js/google_login.js"></script>
  <script src="../assets/js/support.js"></script>
  <script src="../assets/js/nav.js"></script>
</body>

</html>