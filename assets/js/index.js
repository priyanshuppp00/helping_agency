let isLoggedIn = false; // Change to true if the user is logged in

    document.querySelectorAll('[data-require-login]').forEach(link => {
      link.addEventListener('click', function (e) {
        if (!isLoggedIn) {
          e.preventDefault(); // Prevent default navigation
          showModal(); // Show the login/register modal
        }
      });
    });
 function showModal() {
      document.getElementById('loginModal').style.display = 'flex';
    }

    function closeModal() {
      document.getElementById('loginModal').style.display = 'none';
    }

 