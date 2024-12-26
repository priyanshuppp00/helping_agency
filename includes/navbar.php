<?php if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
$current_page = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/nav.css">
  <style>

  </style>
  <title>Helping Agency</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Helping Agency</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link <?php echo $current_page == 'home.php' ? 'active' : ''; ?>" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $current_page == 'services.php' ? 'active' : ''; ?>" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $current_page == 'about.php' ? 'active' : ''; ?>" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $current_page == 'faqs.php' ? 'active' : ''; ?>" href="faqs.php">FAQs</a>
          </li>
          <?php if (isset($_SESSION['username'])): ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?php echo ($current_page == 'dashboard.php' || $current_page == 'profile.php') ? 'active' : ''; ?>" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user me-3"></i> <?php echo htmlspecialchars($_SESSION['username']); ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 'yes'): ?>
                  <li><a class="dropdown-item" href="../code/dashboard.php"><i class="fa-solid fa-tachometer-alt me-2"></i> Dashboard</a></li>
                <?php endif; ?>
                <li><a class="dropdown-item <?php echo $current_page == 'profile.php' ? 'active' : ''; ?>" href="../code/profile.php"><i class="fa-solid fa-user me-2"></i> Profile</a></li>
                <li><a class="dropdown-item" href="../terms/privacy_policy.php" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-user-shield me-2"></i> Privacy Policy</a></li>
                <li><a class="dropdown-item" href="../terms/termsofuse.php" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-file-contract me-2"></i> Terms of Use</a></li>
                <li><a class="dropdown-item text-danger" href="../php/logout.php"><i class="fa-solid fa-right-from-bracket me-2"></i> Logout</a></li>
              </ul>
            </li>
          <?php else: ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user me-2"></i> Account
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="../code/login.php"><i class="fa-solid fa-right-to-bracket me-2"></i> Login</a></li>
                <li><a class="dropdown-item" href="../code/register.php"><i class="fa-solid fa-user-plus me-2"></i> Register</a></li>
              </ul>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>