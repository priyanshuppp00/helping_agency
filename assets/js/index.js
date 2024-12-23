let isLoggedIn = false; // Change to true if the user is logged in

// Function to show the login modal
function showModal() {
  const modal = document.getElementById('loginModal');
  modal.style.display = 'block'; // Ensure the modal is visible
  modal.classList.add('show'); // Add the Bootstrap "show" class
}

// Function to close the login modal
function closeModal() {
  const modal = document.getElementById('loginModal');
  modal.style.display = 'none'; // Hide the modal
  modal.classList.remove('show');
}

// Check if the user is logged in
window.addEventListener('DOMContentLoaded', () => {
  if (isLoggedIn) {
    // Hide login/register buttons if the user is logged in
    document.querySelector('.nav-link[href="./code/login.php"]').style.display = 'none';
    document.querySelector('.nav-link[href="./code/register.php"]').style.display = 'none';
  }

  // Add click event listeners for links requiring login
  document.querySelectorAll('[data-require-login]').forEach(link => {
    link.addEventListener('click', function (e) {
      const href = link.getAttribute('href');

      // Show modal if user is not logged in
      if (!isLoggedIn && !href.includes('login') && !href.includes('register')) {
        e.preventDefault(); // Prevent navigation
        showModal(); // Trigger the modal
      }
    });
  });
});
