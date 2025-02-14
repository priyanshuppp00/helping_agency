<?php
include '../php/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Helping Agency is dedicated to uplifting individuals and communities through comprehensive services.">
  <meta name="keywords" content="Helping Agency, support, care, global reach">
  <meta name="author" content="Helping Agency">
  <title>About</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/nav.css">
  <link rel="stylesheet" href="../assets/css/support.css">
  <link rel="stylesheet" href="../assets/css/sticky.css">
</head>


<body>
  <?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  ?>
  <?php include '../includes/navbar.php'; ?>
  <!-- Page Header -->
  <header class="hero text-center py-5 bg-primary text-white">
    <div class="container py-5">
      <h1 class="text-center text-white mb-4 animate__animated animate__fadeInDown">About Us</h1>
      <p class="text-center animate__animated animate__fadeInUp fs-5">We are a helping agency dedicated to providing top-notch services to our clients. Our team of professionals is committed to excellence and ensuring customer satisfaction.</p>
    </div>
  </header>


  <section class="about ">
    <div class="container ">
      <div class="row mt-5">
        <div class="col-md-4">
          <div class="card h-100 animate__animated animate__fadeInLeft">
            <img src="../assets/images/professional.jpg" class="card-img-top" alt="Service 1">
            <div class="card-body">
              <h5 class="card-title">Experienced Professionals</h5>
              <p class="card-text">Our team consists of experts with years of experience in their respective fields.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 animate__animated animate__fadeInUp">
            <img src="../assets/images/quality.jpg" class="card-img-top" alt="Service 2">
            <div class="card-body">
              <h5 class="card-title">Quality Service</h5>
              <p class="card-text">We ensure top-quality service by adhering to industry best practices and standards.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 animate__animated animate__fadeInRight">
            <img src="../assets/images/customer.jpg" class="card-img-top" alt="Service 3">
            <div class="card-body">
              <h5 class="card-title">Customer Satisfaction</h5>
              <p class="card-text">Your satisfaction is our top priority, and we strive to exceed expectations.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include '../includes/sticky.php'; ?>
  <?php include '../includes/support.php'; ?>
  <!-- Footer -->
  <?php include '../includes/footer.php'; ?>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  <!-- Custom Scripts -->
  <script src="../assets/js/support.js"></script>
  <script src="../assets/js/nav.js"></script>
  <script src="../assets/js/script.js"></script>
</body>

</html>