<?php
session_start(); // Start the session
include '../php/db_connect.php'; // Database connection

// Check if the user is logged in and if the welcome message should be shown
$showWelcome = isset($_SESSION['show_welcome']) && $_SESSION['show_welcome'];
if ($showWelcome) {
  // Unset the session variable to prevent showing the message again on refresh
  unset($_SESSION['show_welcome']);
}
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
            <a href="#" class="btn btn-primary">Go to Services</a>
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
            <a href="#" class="btn btn-success">Go to Users</a>
          </div>
        </div>
      </div>
      <!-- Analytics Card -->
      <div class="col-md-4">
        <div class="card text-center border-info">
          <div class="card-body">
            <i class=" fa-solid fa-chart-line fa-3x text-info mb-3"></i>
            <h5 class="card-title">View Analytics</h5>
            <p class="card-text">Check real-time statistics and reports.</p>
            <a href="#" class="btn btn-info">View Analytics</a>
          </div>
        </div>
      </div>
      <!-- Register New Admin Card -->
      <div class="col-md-4">
        <div class="card text-center justify-content-center border-warning">
          <div class="card-body">
            <i class="fa-solid fa-user-plus fa-3x text-warning mb-3"></i>
            <h5 class="card-title">Register New Admin</h5>
            <p class="card-text">Add a new admin to your agency.</p>
            <a href="#" class="btn btn-warning">Register Admin</a>
          </div>
        </div>
      </div>
      <!-- Manage Feedback Card -->
      <div class="col-md-4">
        <div class="card text-center border-secondary">
          <div class="card-body">
            <i class="fa-solid fa-comments fa-3x text-secondary mb-3"></i>
            <h5 class="card-title">Manage Feedback</h5>
            <p class="card-text">View and respond to user feedback.</p>
            <a href="#" class="btn btn-secondary">Manage Feedback</a>
          </div>
        </div>
      </div>
      <!-- View Reports Card -->
      <div class="col-md-4">
        <div class="card text-center border-danger">
          <div class="card-body">
            <i class="fa-solid fa-file-alt fa-3x text-danger mb-3"></i>
            <h5 class="card-title">View Reports</h5>
            <p class="card-text">Access detailed reports and insights.</p>
            <a href="#" class="btn btn-danger">View Reports</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Additional Sections -->
    <div class="row mt-5">
      <div class="col-md-6">
        <div class="p-4 bg-light rounded shadow-sm">
          <h4>Upcoming Events</h4>
          <ul class="list-group">
            <li class="list-group-item">Community Outreach - March 15, 2023</li>
            <li class="list-group-item">Annual Fundraiser - April 20, 2023</li>
            <li class="list-group-item">Volunteer Training - May 5, 2023</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-4 bg-light rounded shadow-sm">
          <h4>Important Announcements</h4>
          <ul class="list-group">
            <li class="list-group-item">New service hours effective from March 1, 2023</li>
            <li class="list-group-item">Staff meeting scheduled for March 10, 2023</li>
            <li class="list-group-item">Feedback survey available until March 30, 2023</li>
          </ul>
        </div>
      </div>
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
              <li class="list-group-item"><a href="#">Notifications</a></li>
              <li class="list-group-item"><a href="#">Settings</a></li>
              <li class="list-group-item"><a href="login.php">Admin Login</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include '../includes/sticky.php'; ?>
  <?php include '../includes/support.php'; ?>
  <?php include '../includes/footer.php' ?>

  <!-- Footer -->

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