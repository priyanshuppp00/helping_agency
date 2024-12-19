<?php
include 'php/db_connect.php'; // Include database connection

// Check for success or error messages from query parameters
$successMessage = '';
if (isset($_GET['success']) && $_GET['success'] == 1 && isset($_GET['name'])) {
  $successMessage = "Thank you, " . htmlspecialchars($_GET['name']) . "! Your message has been successfully submitted.";
} elseif (isset($_GET['success']) && $_GET['success'] == 0) {
  $successMessage = "An error occurred while submitting your message. Please try again later.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Helping Agency</title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <?php include 'includes/navbar.php'; ?>

  <!-- Page Header -->
  <header class="bg-dark text-white text-center py-5">
    <div class="container py-5">
      <h4>Get in Touch</h4>
      <p class="text-center">We'd love to hear from you! Please fill out the form below and we'll get back to you as soon as possible.</p>
    </div>
  </header>

  <section class="contact py-5">
    <div class="container">
      <h1 class="text-center mb-4">Contact Us</h1>

      <!-- Success/Error Message -->
      <?php if (!empty($successMessage)): ?>
        <div class="alert alert-<?php echo isset($_GET['success']) && $_GET['success'] == 1 ? 'success' : 'danger'; ?> text-center" role="alert">
          <?php echo htmlspecialchars($successMessage); ?>
        </div>
      <?php endif; ?>

      <div class="row">
        <!-- Contact Form Section -->
        <div class="col-md-6">
          <form action="php/submit_contact.php" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Your Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Your Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>

        <!-- Our Location Section -->
        <div class="col-md-6 d-flex align-items-center">
          <div class="text-center text-md-end">
            <h4>Our Location</h4>
            <p>123 Helping Agency St., Your City, Your Country</p>
            <p>Email: <a href="mailto:contact@helpingagency.com">contact@helpingagency.com</a></p>
            <p>Phone: +123 456 7890</p>
            <p>Feel free to reach out to us!</p>
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