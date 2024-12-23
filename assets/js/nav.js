// Navbar Scroll Effect
document.addEventListener('scroll', function() {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 50) {
    navbar.classList.remove('navbar-light');
    navbar.classList.add('navbar-dark', 'fixed-top'); // Combine class additions
  } else {
    navbar.classList.remove('navbar-dark', 'fixed-top'); // Combine class removals
    navbar.classList.add('navbar-light');
  }
});

// Active Link Highlighting
document.addEventListener("DOMContentLoaded", function() {
  const currentUrl = window.location.href.split('#')[0]; // Remove any fragments
  const navLinks = document.querySelectorAll('.nav-link');
  
  navLinks.forEach(function(link) {
    if (link.href.split('#')[0] === currentUrl) {
      link.classList.add('active');
    } else {
      link.classList.remove('active'); // Ensure other links don't stay active
    }
  });
});

// Custom Dropdown Toggle
document.addEventListener('DOMContentLoaded', function () {
  const dropdowns = document.querySelectorAll('.dropdown-toggle');
  
  dropdowns.forEach(function (dropdown) {
    dropdown.addEventListener('click', function (e) {
      e.preventDefault(); // Prevent default behavior
      e.stopPropagation(); // Prevent event bubbling
      
      // Toggle dropdown menu visibility
      const menu = dropdown.nextElementSibling;
      if (menu && menu.classList.contains('dropdown-menu')) {
        menu.classList.toggle('show');
      }
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener('click', function () {
    document.querySelectorAll('.dropdown-menu.show').forEach(function (menu) {
      menu.classList.remove('show');
    });
  });
});
