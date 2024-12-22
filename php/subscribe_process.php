<?php
require 'db_connect.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $conn->real_escape_string($_POST['name']);
  $email = $conn->real_escape_string($_POST['email']);
  $service = $conn->real_escape_string($_POST['service']);

  // Insert data into the database
  $stmt = $conn->prepare("INSERT INTO subscribe (name, email, service) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $service);

  if ($stmt->execute()) {
    echo json_encode(["success" => true]);
  } else {
    echo json_encode(["success" => false, "message" => "An error occurred. Please try again."]);
  }

  $stmt->close();
  $conn->close();
} else {
  echo json_encode(["success" => false, "message" => "Invalid request."]);
}
