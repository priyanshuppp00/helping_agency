<?php
include 'db_connect.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if required fields are set and not empty
  $name = htmlspecialchars($_POST['name'] ?? '');
  $email = htmlspecialchars($_POST['email'] ?? '');
  $message = htmlspecialchars($_POST['message'] ?? '');

  // Validate input data
  if (empty($name) || empty($email) || empty($message)) {
    header("Location: ../contact.php?success=0&error=missing_data");
    exit;
  }

  // Prepare SQL query to insert the data into the database
  $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
  if ($stmt === false) {
    // Handle SQL preparation error
    header("Location: ../contact.php?success=0&error=sql_error");
    exit;
  }

  // Bind parameters and execute the statement
  $stmt->bind_param("sss", $name, $email, $message);
  if ($stmt->execute()) {
    // Redirect to the contact page with a success message
    header("Location: ../contact.php?success=1&name=" . urlencode($name));
  } else {
    // Redirect with an error message
    header("Location: ../contact.php?success=0&error=insert_failed");
  }

  // Close the statement and connection
  $stmt->close();
  $conn->close();
  exit;
} else {
  // Redirect if the request method is not POST
  header("Location: ../contact.php?success=0&error=invalid_request");
  exit;
}
