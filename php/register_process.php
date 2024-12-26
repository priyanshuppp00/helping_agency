<?php
session_start();
require 'db_connect.php'; // Include database connection

function isPasswordStrong($password)
{
  // Define password strength criteria
  return preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^\w\d\s]).{8,}$/', $password);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve and sanitize user inputs
  $fullname = htmlspecialchars($_POST['fullname']);
  $username = htmlspecialchars($_POST['username']);
  $email = htmlspecialchars($_POST['email']);
  $password = $_POST['password'];
  $role = isset($_POST['role']) ? htmlspecialchars($_POST['role']) : 'user'; // Default to 'user'

  // Check username length
  if (strlen($username) < 3 || strlen($username) > 20) {
    $_SESSION['message'] = "Username must be between 3 and 5 characters long.";
    $_SESSION['message_type'] = "warning";
    header("Location: ../code/register.php");
    exit;
  }

  // Check if password is strong
  if (!isPasswordStrong($password)) {
    $_SESSION['message'] = "Password must be at least 8 characters long and include uppercase letters, lowercase letters, numbers, and special characters.";
    $_SESSION['message_type'] = "warning";
    header("Location: ../code/register.php");
    exit;
  }

  // Hash the password
  $password_hashed = password_hash($password, PASSWORD_DEFAULT);

  // Check if email or username already exists
  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
  $stmt->bind_param("ss", $email, $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    // User already exists
    $_SESSION['message'] = "User  already exists! Please use a different email or username.";
    $_SESSION['message_type'] = "warning";
    header("Location: ../code/register.php");
    exit;
  } else {
    // Insert new user into the database
    $stmt = $conn->prepare("INSERT INTO users (fullname, username, email, password, is_admin) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fullname, $username, $email, $password_hashed, $role);

    if ($stmt->execute()) {
      $_SESSION['message'] = "Registration successful! Please log in.";
      $_SESSION['message_type'] = "success";
      header("Location: ../code/login.php");
    } else {
      $_SESSION['message'] = "An error occurred. Please try again.";
      $_SESSION['message_type'] = "danger";
      header("Location: ../code/register.php");
    }
  }

  // Close the statement and connection
  $stmt->close();
  $conn->close();
} else {
  // Redirect if accessed directly
  header("Location: ../code/register.php");
  exit;
}
