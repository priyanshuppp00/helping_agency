document.addEventListener('scroll', function() {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 50) {
    navbar.classList.remove('navbar-light');
    navbar.classList.add('navbar-dark');
    navbar.classList.add('fixed-top'); // Add fixed-top class
  } else {
    navbar.classList.remove('navbar-dark');
    navbar.classList.add('navbar-light');
    navbar.classList.remove('fixed-top'); // Remove fixed-top class
  }
});

document.addEventListener("DOMContentLoaded", function() {
  // Get current URL
  var currentUrl = window.location.href;
  
  // Get all nav links
  var navLinks = document.querySelectorAll('.nav-link');
  
  // Loop through each nav link and check if the href matches current URL
  navLinks.forEach(function(link) {
    if (link.href === currentUrl) {
      link.classList.add('active');  // Add 'active' class to the matching link
    }
  });
});

document.addEventListener('DOMContentLoaded', function () {
  const dropdowns = document.querySelectorAll('.dropdown-toggle');
  
  dropdowns.forEach(function (dropdown) {
    dropdown.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      dropdown.classList.toggle('active');
      const menu = dropdown.nextElementSibling;
      menu.classList.toggle('show');
    });
  });
});
