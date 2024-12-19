<?php
include 'php/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Helping Agency</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/support.css">
  <!-- AOS Library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css">

</head>


<body>

  <!-- Navbar -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Hero Section -->
  <header class="hero bg-dark text-white text-center py-5">
    <div class="container py-5">
      <h2 class="text-center">Welcome to Helping Agency</h2>
      <p class="lead">We provide support, services, and resources to those in need.</p>
      <a href="services.php" class="btn btn-light btn-lg">Explore Services</a>
    </div>
  </header>

  <!-- Services Section -->
  <section class="services py-1">

    <div class="container my-5">
      <h2 class="text-center mb-4" data-aos="fade-up">Our Services</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="assets/images/lifeline.jpg" class="card-img-top" alt="Service">
            <div class="card-body">
              <h5 class="card-title">LifeLine Solutions</h5>
              <p class="card-text">Your Partner for Comprehensive Support and Growth.</p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets/images/CareConnect.webp" class="card-img-top" alt="Service">
            <div class="card-body">
              <h5 class="card-title">CareConnect Services</h5>
              <p class="card-text">Connecting You to Reliable and Accessible Support</p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets/images/community.jpg" class="card-img-top" alt="Service">
            <div class="card-body">
              <h5 class="card-title">Community Reach Services</h5>
              <p class="card-text">Empowering Communities, Transforming Lives.</p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>


      <h2 class="text-center mb-4" data-aos="fade-up">Our Services</h2>
      <div class="row">
        <?php
        $query = "SELECT * FROM services";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
          while ($service = $result->fetch_assoc()) {
            echo "
            <div class='col-md-4 mb-4' data-aos='fade-up' data-aos-duration='1000'>
              <div class='card'>
                <img src='{$service['image_url']}' class='card-img-top' alt='{$service['name']}'>
                <div class='card-body'>
                  <h5 class='card-title'>{$service['name']}</h5>
                  <p class='card-text'>{$service['description']}</p>
                  <a href='#' class='btn btn-primary'>Learn More</a>
                </div>
              </div>
            </div>
          ";
          }
        } else {
          echo "<p class='text-center'>No services available at the moment.</p>";
        }
        ?>
      </div>
    </div>
  </section>
  <?php include 'includes/sticky.php'; ?>
  <?php include 'includes/support.php'; ?>
  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
  <script src="./assets/js/support.js"></script>

  <script>
    AOS.init(); // Initialize AOS
  </script>

</body>

</html>