<?php
session_start();
session_unset(); // Unset session variables
session_destroy(); // Destroy the session

// Redirect to the index.html
header("Location: ../index.html");
exit();
