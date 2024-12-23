 document.getElementById('resetForm').addEventListener('submit', function (e) {
    const password = document.getElementById('new_password').value;
    const confirmPassword = document.getElementById('confirm_password').value;

    if (password !== confirmPassword) {
      e.preventDefault(); // Prevent form submission
      const errorElement = document.getElementById('passwordError');
      errorElement.style.display = 'block'; // Show error
    }
  });

