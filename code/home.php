<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Helping Agency - Welcome</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/nav.css">
  <link rel="stylesheet" href="../assets/css/sticky.css">
  <link rel="stylesheet" href="../assets/css/support.css">
  <link rel="stylesheet" href="../assets/css/subscribe.css">

</head>

<body>

  <!-- Navbar -->
  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/subscribe.php'; ?>
  <!-- Hero Section -->
  <header class="hero bg-primary text-white text-center py-5">
    <div class="container py-5">
      <h1>Welcome to Helping Agency</h1>
      <p class="lead">Together, we make a difference in people’s lives.</p>
      <a href="services.php" class="btn btn-light btn-lg">Explore Our Services</a>
    </div>
  </header>

  <!-- Features Section -->
  <section class="features py-5">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4">
          <i class="fas fa-hands-helping fa-3x text-primary mb-3"></i>
          <h4>Support</h4>
          <p>We provide hands-on support to communities in need, ensuring no one feels alone.</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-heart fa-3x text-primary mb-3"></i>
          <h4>Care</h4>
          <p>Our team cares deeply about improving lives through innovative and compassionate solutions.</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-globe fa-3x text-primary mb-3"></i>
          <h4>Global Reach</h4>
          <p>We operate worldwide, connecting resources with those who need them most.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="about bg-light py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="assets/images/about.jpg" alt="About Us" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
          <h2>About Helping Agency</h2>
          <p>Helping Agency is dedicated to uplifting individuals and communities through our comprehensive services. We believe in a world where everyone has access to the resources they need to thrive.</p>
          <a href="about.php" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
  </section>


  <?php include '../includes/sticky.php'; ?>
  <?php include '../includes/support.php'; ?>
  <!-- Footer -->
  <?php include '../includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
  <script src="../assets/js/support.js"></script>
  <script src="../assets/js/subscribe.js"></script>
  <script src="../assets/js/nav.js"></script>



</body>

</html>