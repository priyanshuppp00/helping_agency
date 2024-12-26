<?php
include '../php/db_connect.php'; // Include database connection

// Start the session
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Registration - Helping Agency</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/register.css">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>
  <section class="register">
    <h1 class="text-center mt-5">HELPING AGENCY</h1>
    <div class="register-container mx-auto">
      <h2>Create a New Staff Account</h2>
      <?php
      // Display feedback messages
      if (isset($_SESSION['message'])) {
        echo "<div class='alert alert-" . htmlspecialchars($_SESSION['message_type']) . "'>" . htmlspecialchars($_SESSION['message']) . "</div>";
        unset($_SESSION['message'], $_SESSION['message_type']);
      }
      ?>
      <form action="../php/register_process.php" method="POST">
        <div class="mb-3">
          <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your Full Name" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" required>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required minlength="3" maxlength="5">
        </div>
        <div class="mb-3 password-wrapper">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          <i class="fas fa-eye password-toggle-icon" onclick="togglePassword()" id="toggleIcon" style="cursor: pointer;"></i>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" id="role" name="role" placeholder="Role (e.g., Staff, Manager)" required>
        </div>
        <button type="submit" class="btn btn-primary w-100 mb-3">Register</button>
      </form>
      <p class="text-center mt-3"><a href="forget_password.php">Forgotten account?</a></p>
      <div class="divider">or</div>
      <p class="text-center"><a href="login.php" class="already-account">Already have an account?</a></p>
      <button id="google-login-button" class="btn btn-danger w-100">Join with Google</button>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/google_login.js"></script>
  <script>
    function togglePassword() {
      const passwordField = document.getElementById("password");
      const toggleIcon = document.getElementById("toggleIcon");
      if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
      } else {
        passwordField.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
      }
    }
  </script>
</body>

</html>