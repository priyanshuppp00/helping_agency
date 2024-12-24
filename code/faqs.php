<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Helping Agency is dedicated to uplifting individuals and communities through comprehensive services.">
  <meta name="keywords" content="Helping Agency, support, care, global reach">
  <meta name="author" content="Helping Agency">
  <title>FAQs</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
      <h1>Frequently Asked Questions</h1>
      <p class="lead">Find answers to the most common questions about our services</p>
    </div>
  </header>

  <!-- FAQ Section -->
  <section class="py-5">
    <div class="container col-md-6">
      <div class="accordion" id="faqAccordion">
        <!-- FAQ 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeadingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
              What services does Helping Agency provide?
            </button>
          </h2>
          <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Helping Agency provides a wide range of services including consulting, financial planning, and career guidance. Our mission is to help you achieve your goals efficiently and effectively.
            </div>
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeadingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
              How can I contact Helping Agency?
            </button>
          </h2>
          <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              You can contact us through the <a href="contact.php">Contact</a> page on our website, or email us directly at <strong>support@helpingagency.com</strong>. We are here to assist you!
            </div>
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeadingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
              Are your services available internationally?
            </button>
          </h2>
          <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes, we offer our services globally. We can communicate via email, phone, or video conferencing to ensure we meet your needs regardless of your location.
            </div>
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeadingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
              What is the process to get started with Helping Agency?
            </button>
          </h2>
          <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              To get started, simply contact us via the <a href="contact.php">Contact</a> page or register an account. Once you reach out, we will guide you through the onboarding process tailored to your specific needs.
            </div>
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeadingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
              Do you offer customized solutions?
            </button>
          </h2>
          <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Absolutely! We pride ourselves on offering customized solutions tailored to the unique needs of our clients. Contact us to discuss your requirements in detail.
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