<?php
session_start();
require 'db_connect.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validate form inputs
  $username = isset($_POST['username']) ? trim($_POST['username']) : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';

  // Prepare and execute SQL statement
  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
  if (!$stmt) {
    // Handle database error
    $_SESSION['message'] = "Database query error.";
    header("Location: ../code/login.php");
    exit;
  }

  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result && $result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verify password
    if (password_verify($password, $user['password'])) {
      // Set session variables and redirect to dashboard
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['message'] = "Welcome, " . $user['username'] . "!";
      header("Location: ../code/home.php");
      exit;
    } else {
      // Invalid password
      $_SESSION['message'] = "Invalid username or password.";
      header("Location: ../code/login.php");
      exit;
    }
  } else {
    // Username not found
    $_SESSION['message'] = "Invalid username or password.";
    header("Location: ../../code/login.php");
    exit;
  }

  // Close statement if initialized
  if ($stmt) {
    $stmt->close();
  }

  // Close connection
  $conn->close();
} else {
  // Redirect if accessed directly
  header("Location: ../code/login.php");
  exit;
}
