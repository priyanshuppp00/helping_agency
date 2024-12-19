<?php
session_start();
include 'php/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

  if (!empty($email)) {
    // Check if the user has already subscribed
    $query = "SELECT id FROM subscribers WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
      $_SESSION['subscribed'] = true;
      echo "You have already subscribed!";
    } else {
      $query = "INSERT INTO subscribers (name, phone, email, description) VALUES (?, ?, ?, ?)";
      $stmt = $conn->prepare($query);
      $stmt->bind_param("ssss", $name, $phone, $email, $description);

      if ($stmt->execute()) {
        $_SESSION['subscribed'] = true;
        echo "Subscription successful!";
      } else {
        echo "Error: " . $conn->error;
      }
    }

    $stmt->close();
  } else {
    echo "Invalid email address!";
  }
} else {
  if (isset($_SESSION['subscribed']) && $_SESSION['subscribed'] === true) {
    exit;
  }
}
