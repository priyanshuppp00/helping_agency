<?php
$servername = "localhost";  // Replace with your server name
$username = "root";         // Replace with your MySQL username
$password = "";             // Replace with your MySQL password
$database = "helping_agency"; // Database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
