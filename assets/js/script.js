document.querySelectorAll('.learn-more-btn').forEach(button => {
  button.addEventListener('click', function() {
    const targetId = this.getAttribute('data-target'); // Get the target ID from data-target attribute
    const additionalContent = document.querySelector(targetId); // Find the target element
    const card = this.closest('.card'); // Get the closest card container
    
    if (additionalContent.style.display === 'none') {
      additionalContent.style.display = 'block'; // Show content
      this.textContent = 'Learn Less'; // Change button text
      card.classList.add('active'); // Add active class to change card background and font size
    } else {
      additionalContent.style.display = 'none'; // Hide content
      this.textContent = 'Learn More'; // Change button text back
      card.classList.remove('active'); // Remove active class to reset background and font size
    }
  });
});
