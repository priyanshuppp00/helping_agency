<?php
session_start();
require 'db_connect.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validate form inputs
  $username = isset($_POST['username']) ? trim($_POST['username']) : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';

  // Check username length
  if (strlen($username) < 3 || strlen($username) > 5) {
    $_SESSION['message'] = "Username must be between 3 and 5 characters long.";
    $_SESSION['message_type'] = "warning";
    header("Location: ../code/login.php");
    exit;
  }

  // Prepare and execute SQL statement
  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
  if (!$stmt) {
    // Handle database error
    $_SESSION['message'] = "Database query error.";
    $_SESSION['message_type'] = "danger"; // Set message type for display
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
      // Set session variables
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['is_admin'] = $user['is_admin'] === 'yes' ? 'yes' : 'no'; // Ensure is_admin is set correctly
      $_SESSION['message'] = "Welcome, " . htmlspecialchars($user['username']) . "!";
      $_SESSION['message_type'] = "success"; // Set message type for display

      // Redirect based on user role
      if ($_SESSION['is_admin'] === 'yes') {
        header("Location: ../code/dashboard.php"); // Redirect to admin dashboard
      } else {
        header("Location: ../code/home.php"); // Redirect to user dashboard
      }
      exit;
    } else {
      // Invalid password
      $_SESSION['message'] = "Invalid username or password.";
      $_SESSION['message_type'] = "danger";
      header("Location: ../code/login.php");
      exit;
    }
  } else {
    // Username not found
    $_SESSION['message'] = "Invalid username or password.";
    $_SESSION['message_type'] = "warning";
    header("Location: ../code/login.php");
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
