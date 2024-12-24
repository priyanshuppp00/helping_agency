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