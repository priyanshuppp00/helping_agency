<!-- Navbar -->

<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Helping Agency</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="faqs.php">FAQs</a></li>
        <!-- Login/Logout/Register Section -->
        <?php if (isset($_SESSION['username'])): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user me-3"></i> <?php echo htmlspecialchars($_SESSION['username']); ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <li>
                <a class="dropdown-item" href="../code/profile.php">
                  <i class="fa-solid fa-user me-2"></i> Profile
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="../terms/privacy_policy.php" target="_blank" rel="noopener noreferrer">
                  <i class="fa-solid fa-user-shield me-2"></i> Privacy Policy
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="../terms/termsofuse.php" target="_blank" rel="noopener noreferrer">
                  <i class="fa-solid fa-file-contract me-2"></i> Terms of Use
                </a>
              </li>
              <li>
                <a class="dropdown-item text-danger" href="../php/logout.php">
                  <i class="fa-solid fa-right-from-bracket me-2"></i> Logout
                </a>
              </li>
            </ul>
          </li>
        <?php else: ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user me-2"></i> Account
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <li>
                <a class="dropdown-item" href="../code/login.php">
                  <i class="fa-solid fa-right-to-bracket me-2"></i> Login
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="../code/register.php">
                  <i class="fa-solid fa-user-plus me-2"></i> Register
                </a>
              </li>
            </ul>
          </li>
        <?php endif; ?>

      </ul>
    </div>
  </div>
</nav>