<?php
include '../php/db_connect.php'; // Database connection
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Helping Agency is dedicated to uplifting individuals and communities through comprehensive services.">
  <meta name="keywords" content="Helping Agency, support, care, global reach">
  <meta name="author" content="Helping Agency">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="../assets/css/dashboard.css">
  <link rel="stylesheet" href="../assets/css/nav.css">
  <link rel="stylesheet" href="../assets/css/support.css">
  <link rel="stylesheet" href="../assets/css/sticky.css">
</head>

<body>
  <?php include '../includes/navbar.php'; ?>

  <!-- Dashboard Header -->
  <header class="dashboard-header text-center py-5 bg-primary text-white">
    <div class="container py-5">
      <h2 class="text-center">Welcome to Helping Agency</h2>
      <p class="lead">We provide support, services, and resources to those in need.</p>
      <a href="services.php" class="btn btn-light btn-lg">Explore Services</a>
    </div>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
    <p>Your one-stop solution for managing services and users effectively</p>
  </header>

  <!-- Main Content -->
  <div class="container my-5">
    <div class="row g-4">
      <!-- Service Card -->
      <div class="col-md-4">
        <div class="card text-center border-primary">
          <div class="card-body">
            <i class="fa-solid fa-handshake fa-3x text-primary mb-3"></i>
            <h5 class="card-title">Manage Services</h5>
            <p class="card-text">View, edit, or add new services for your agency.</p>
            <a href="manage_services.php" class="btn btn-primary">Go to Services</a>
          </div>
        </div>
      </div>
      <!-- User Management Card -->
      <div class="col-md-4">
        <div class="card text-center border-success">
          <div class="card-body">
            <i class="fa-solid fa-users fa-3x text-success mb-3"></i>
            <h5 class="card-title">Manage Users</h5>
            <p class="card-text">Handle user registrations and profiles.</p>
            <a href="manage_users.php" class="btn btn-success">Go to Users</a>
          </div>
        </div>
      </div>
      <!-- Analytics Card -->
      <div class="col-md-4">
        <div class="card text-center border-info">
          <div class="card-body">
            <i class="fa-solid fa-chart-line fa-3x text-info mb-3"></i>
            <h5 class="card-title">View Analytics</h5>
            <p class="card-text">Check real-time statistics and reports.</p>
            <a href="analytics.php" class="btn btn-info">View Analytics</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Additional Sections -->
    <div class="row mt-5">
      <div class="col-md-6">
        <div class="p-4 bg-light rounded shadow-sm">
          <h4>Recent Activities</h4>
          <ul class="list-group">
            <li class="list-group-item">User John added a new service: Counseling</li>
            <li class="list-group-item">5 new user registrations</li>
            <li class="list-group-item">Updated "Community Reach" service details</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-4 bg-light rounded shadow-sm">
          <h4>Quick Links</h4>
          <ul class="list-group">
            <li class="list-group-item"><a href="profile.php">My Profile</a></li>
            <li class="list-group-item"><a href="notifications.php">Notifications</a></li>
            <li class="list-group-item"><a href="settings.php">Settings</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <?php include '../includes/sticky.php'; ?>
  <?php include '../includes/support.php'; ?>
  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-4">
    <div class="container">
      <p>&copy; <?php echo date("Y"); ?> Helping Agency. All rights reserved.</p>
      <div class="d-flex justify-content-center">
        <a href="login.php" class="btn btn-warning mx-2">Admin Login</a>
        <a href="register.php" class="btn btn-success mx-2">Register New User</a>
      </div>
    </div>
  </footer>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  <!-- Custom Scripts -->
  <script src="../assets/js/support.js"></script>
  <script src="../assets/js/nav.js"></script>
  <script src="../assets/js/script.js"></script>

  <script>
    AOS.init(); // Initialize AOS
  </script>
</body>

</html>