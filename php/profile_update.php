<?php
// Start session and include database connection
session_start();
include 'db_connect.php'; // Replace with your DB connection file

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

// Fetch current user data
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
  die("User not found.");
}

// Check if the form is submitted
if (isset($_POST['update'])) {
  // Fetch form inputs
  $fullname = $_POST['fullname'];
  $phone_no = $_POST['phone_no'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];
  $new_password = $_POST['password'];
  $profile_pic = $_FILES['profile_image']; // Update form field name

  // Handle profile picture upload
  $profile_pic_name = $user['profile_image']; // Default to existing picture
  if (!empty($profile_pic['name'])) {
    $upload_dir = '../uploads/';

    // Ensure the upload directory exists
    if (!is_dir($upload_dir)) {
      mkdir($upload_dir, 0777, true);
    }

    $profile_pic_name = basename($profile_pic['name']);
    $target_file = $upload_dir . $profile_pic_name;

    // Move the uploaded file
    if (!move_uploaded_file($profile_pic['tmp_name'], $target_file)) {
      die("Error uploading profile picture. Please check permissions.");
    }
  }

  // Prepare the SQL query
  $query = "UPDATE users SET fullname = ?, phone_no = ?, dob = ?, address = ?, profile_image = ? WHERE id = ?";
  if (!empty($new_password)) {
    $query = "UPDATE users SET fullname = ?, phone_no = ?, dob = ?, address = ?, profile_image = ?, password = ? WHERE id = ?";
  }

  $stmt = $conn->prepare($query);

  // Check if the statement was prepared successfully
  if (!$stmt) {
    die("SQL Error: " . $conn->error);
  }

  // Bind parameters
  if (!empty($new_password)) {
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    $stmt->bind_param("ssssssi", $fullname, $phone_no, $dob, $address, $profile_pic_name, $hashed_password, $user_id);
  } else {
    $stmt->bind_param("sssssi", $fullname, $phone_no, $dob, $address, $profile_pic_name, $user_id);
  }

  // Execute the query
  if ($stmt->execute()) {
    $_SESSION['update_success'] = true;
    header("Location: ../profile.php"); // Redirect after success
    exit();
  } else {
    die("Update failed: " . $stmt->error);
  }

  if ($stmt) {
    $stmt->close();
  }
}
