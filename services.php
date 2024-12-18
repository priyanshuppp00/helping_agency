<?php
include 'php/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services - Helping Agency</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <!-- Navbar -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Page Header -->
  <header class="bg-dark text-white text-center py-5">
    <div class="container py-5">
      <h1 class="text-center text-white mb-4 animate__animated animate__fadeInDown">Welcome to Our Services</h1>
      <p class="text-center animate__animated animate__fadeInUp fs-5">Find answers to the most common questions about our services</p>
    </div>
  </header>


  <!-- Services Section -->
  <section class="services py-4">
    <div class="container">
      <h2 class="text-center mb-4">Our Services</h2>
      <div class="row">
        <?php
        $query = "SELECT * FROM services";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
          while ($service = $result->fetch_assoc()) {
            echo "
                <div class='col-md-4 mb-4'>
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
  <?php include 'sticky.php'; ?>


  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>