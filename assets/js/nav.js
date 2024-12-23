document.addEventListener('scroll', function() {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 50) {
    navbar.classList.remove('navbar-light');
    navbar.classList.add('navbar-dark', 'fixed-top');
  } else {
    navbar.classList.remove('navbar-dark', 'fixed-top');
    navbar.classList.add('navbar-light');
  }
});

document.addEventListener("DOMContentLoaded", function() {
  const currentUrl = window.location.href.split('#')[0]; // Remove any fragments
  const navLinks = document.querySelectorAll('.nav-link');
  
  navLinks.forEach(function(link) {
    if (link.href.split('#')[0] === currentUrl) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });
});

document.addEventListener('DOMContentLoaded', function() {
  const dropdowns = document.querySelectorAll('.dropdown-toggle');

  dropdowns.forEach(function(dropdown) {
    dropdown.addEventListener('click', function(e) {
      e.preventDefault(); // Prevent default behavior
      e.stopPropagation(); // Prevent event propagation

      const menu = dropdown.nextElementSibling;
      if (menu && menu.classList.contains('dropdown-menu')) {
        menu.classList.toggle('show');
      }
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.dropdown-menu')) {
      document.querySelectorAll('.dropdown-menu.show').forEach(function(menu) {
        menu.classList.remove('show');
      });
    }
  });
});
