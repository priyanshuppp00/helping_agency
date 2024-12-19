<?php
include 'php/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Helping Agency</title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
  <?php include 'includes/navbar.php'; ?>
  <!-- Page Header -->
  <header class="bg-dark text-white text-center py-5">
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
            <img src="./assets/images/professional.jpg" class="card-img-top" alt="Service 1">
            <div class="card-body">
              <h5 class="card-title">Experienced Professionals</h5>
              <p class="card-text">Our team consists of experts with years of experience in their respective fields.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 animate__animated animate__fadeInUp">
            <img src="./assets/images/quality.jpg" class="card-img-top" alt="Service 2">
            <div class="card-body">
              <h5 class="card-title">Quality Service</h5>
              <p class="card-text">We ensure top-quality service by adhering to industry best practices and standards.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 animate__animated animate__fadeInRight">
            <img src="./assets/images/customer.jpg" class="card-img-top" alt="Service 3">
            <div class="card-body">
              <h5 class="card-title">Customer Satisfaction</h5>
              <p class="card-text">Your satisfaction is our top priority, and we strive to exceed expectations.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'includes/sticky.php'; ?>
  <?php include 'includes/support.php'; ?>
  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>