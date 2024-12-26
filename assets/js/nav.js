document.addEventListener('scroll', function () {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 50) {
    navbar.classList.remove('navbar-light');
    navbar.classList.add('navbar-dark', 'fixed-top');
  } else {
    navbar.classList.remove('navbar-dark', 'fixed-top');
    navbar.classList.add('navbar-light');
  }
});

document.addEventListener('DOMContentLoaded', () => {
  const dropdownToggles = document.querySelectorAll('.nav-item.dropdown .dropdown-toggle');

  dropdownToggles.forEach(toggle => {
    toggle.addEventListener('click', function (e) {
      // Remove e.preventDefault() to allow the toggle button to work
      const dropdownMenu = this.nextElementSibling;
      const isVisible = dropdownMenu.classList.contains('show');

      // Close all other dropdowns
      document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.classList.remove('show');
      });

      // Toggle the clicked dropdown
      if (!isVisible) {
        dropdownMenu.classList.add('show');
      }
    });

    // Optional: Enable keyboard accessibility
    toggle.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        this.click();
      }
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.dropdown')) {
      document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.classList.remove('show');
      });
    }
  });

  // Handle the navbar toggle button
  const navbarToggle = document.querySelector('.navbar-toggler');
  navbarToggle.addEventListener('click', function () {
    const navbarCollapse = document.querySelector('#navbarNav');
    navbarCollapse.classList.toggle('show');
  });
});