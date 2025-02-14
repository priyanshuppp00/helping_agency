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
  <title>Our_Services</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/nav.css">
  <link rel="stylesheet" href="../assets/css/support.css">
  <link rel="stylesheet" href="../assets/css/sticky.css">

</head>

<body>
  <!-- Navbar -->
  <?php include '../includes/navbar.php'; ?>

  <!-- Page Header -->
  <header class="hero text-center py-5 bg-primary text-white">
    <div class="container py-5">
      <h2 class="text-center ">Welcome to Our Services</h2>
      <p class="text-center animate__animated animate__fadeInUp fs-5">Find answers to the most common questions about our services</p>
    </div>
  </header>


  <!-- Services Section -->
  <section class="services py-1">
    <div class="container my-5">
      <h2 class="text-center mb-4" data-aos="fade-up">Our Services</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="../assets/images/lifeline.jpg" class="card-img-top" alt="Service">
            <div class="card-body">
              <h5 class="card-title">LifeLine Solutions</h5>
              <p class="card-text">Your Partner for Comprehensive Support and Growth.</p>
              <button class="btn btn-primary learn-more-btn" data-target="#lifeline-content">Learn More</button>
              <div class="additional-content mt-2" id="lifeline-content" style="display: none;">
                <p>We provide tailored solutions to help organizations grow and achieve their goals. Our expertise in delivering support ensures long-term success and sustained development.</p>
                <p>At LifeLine Solutions, we specialize in providing tailored strategies designed to enhance organizational performance. Our expertise includes streamlining processes, improving operational efficiency, and fostering sustainable growth.</p>
                <p>We offer customized support in key areas such as project management, workforce optimization, and strategic planning, ensuring your organization achieves long-term success.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="../assets/images/CareConnect.webp" class="card-img-top" alt="Service">
            <div class="card-body">
              <h5 class="card-title">CareConnect Services</h5>
              <p class="card-text">Connecting You to Reliable and Accessible Support</p>
              <button class="btn btn-primary learn-more-btn" data-target="#careconnect-content">Learn More</button>
              <div class="additional-content mt-2" id="careconnect-content" style="display: none;">
                <p>CareConnect Services bridge the gap between individuals and essential support networks, making sure help is available whenever it’s needed.</p>
                <p>We focus on enhancing communication, ensuring that care and assistance are always within reach.</p>
                <p>Our services are designed to provide seamless access to healthcare solutions and community support.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="../assets/images/community.jpg" class="card-img-top" alt="Service">
            <div class="card-body">
              <h5 class="card-title">Community Reach Services</h5>
              <p class="card-text">Empowering Communities, Transforming Lives.</p>
              <button class="btn btn-primary learn-more-btn" data-target="#communityreach-content">Learn More</button>
              <div class="additional-content mt-2" id="communityreach-content" style="display: none;">
                <p>Community Reach Services empower individuals by providing access to local resources and support networks.</p>
                <p>Our focus is on building strong, connected communities where everyone has the opportunity to thrive.</p>
                <p>We facilitate access to community events, social services, and essential support systems for all members.</p>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="row py-5">
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
  <?php include '../includes/sticky.php'; ?>
  <?php include '../includes/support.php'; ?>
  <!-- Footer -->
  <?php include '../includes/footer.php'; ?>
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  <!-- Custom Scripts -->
  <script src="../assets/js/support.js"></script>
  <script src="../assets/js/nav.js"></script>
  <script src="../assets/js/script.js"></script>


</body>

</html>