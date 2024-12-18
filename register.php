<?php
include 'php/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Helping Agency</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>
  <?php include 'includes/navbar.php'; ?>

  <section class="register py-5">
    <div class="container py-4 mt-4">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h2 class="text-center mb-4">Register</h2>
          <?php
          // Display feedback messages
          if (isset($_SESSION['message'])) {
            echo "<div class='alert alert-" . $_SESSION['message_type'] . "'>" . $_SESSION['message'] . "</div>";
            unset($_SESSION['message'], $_SESSION['message_type']);
          }
          ?>

          <form action="php/register_process.php" method="POST">
            <div class="mb-3">
              <label for="fullname" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
          </form>
          <button id="google-login-button" class="btn btn-danger w-100 mt-3">Login with Google</button>
          <p class="text-center mt-3">Already have an account? <a href="login.php">Login here</a>.</p>
        </div>
      </div>
    </div>
  </section>
  <?php include 'sticky.php'; ?>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/google_login.js"></script>


</body>

</html>