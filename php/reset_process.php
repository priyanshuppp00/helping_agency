<?php
session_start();
require 'db_connect.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validate CSRF token
  if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    $_SESSION['message'] = "Invalid request.";
    $_SESSION['message_type'] = "danger";
    header("Location: ../reset_password.php");
    exit;
  }

  // Sanitize and validate input
  $new_password = trim($_POST['new_password']);
  $confirm_password = trim($_POST['confirm_password']);

  if (empty($new_password) || empty($confirm_password)) {
    $_SESSION['message'] = "All fields are required.";
    $_SESSION['message_type'] = "danger";
    header("Location: ../reset_password.php");
    exit;
  }

  if ($new_password !== $confirm_password) {
    $_SESSION['message'] = "Passwords do not match.";
    $_SESSION['message_type'] = "danger";
    header("Location: ../reset_password.php");
    exit;
  }

  // Hash the new password
  $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

  // Check if user is authenticated (e.g., using user_id or email stored in session)
  if (!isset($_SESSION['user_email'])) {
    $_SESSION['message'] = "Unauthorized request.";
    $_SESSION['message_type'] = "danger";
    header("Location: ../code/login.php");
    exit;
  }

  $user_email = $_SESSION['user_email'];

  // Update password in the database
  $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
  if (!$stmt) {
    $_SESSION['message'] = "Database error. Please try again.";
    $_SESSION['message_type'] = "danger";
    header("Location: ../reset_password.php");
    exit;
  }

  $stmt->bind_param("ss", $hashed_password, $user_email);

  if ($stmt->execute()) {
    $_SESSION['message'] = "Password has been successfully reset.";
    $_SESSION['message_type'] = "success";
    unset($_SESSION['csrf_token'], $_SESSION['user_email']); // Clear sensitive session data
    header("Location: ../code/login.php");
    exit;
  } else {
    $_SESSION['message'] = "Failed to reset password. Please try again.";
    $_SESSION['message_type'] = "danger";
    header("Location: ../reset_password.php");
    exit;
  }

  if ($stmt) {
    $stmt->close();
  }

  // Close connection
  $conn->close();
} else {
  // Redirect if accessed directly
  header("Location: ../reset_process.php");
  exit;
}
