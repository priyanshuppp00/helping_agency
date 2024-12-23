document.querySelectorAll('.accordion-button').forEach(button => {
  button.addEventListener('click', function() {
    this.classList.toggle('collapsed');
    const expanded = this.getAttribute('aria-expanded') === 'true';
    this.setAttribute('aria-expanded', !expanded);
    this.nextElementSibling.classList.toggle('show'); // Toggle the collapse
  });
});

document.querySelectorAll('.learn-more-btn').forEach(button => {
  button.addEventListener('click', function() {
    const targetId = this.getAttribute('data-target');
    const additionalContent = document.querySelector(targetId);
    const card = this.closest('.card');
    
    if (additionalContent.style.display === 'none' || additionalContent.style.display === '') {
      additionalContent.style.display = 'block'; // Show content
      this.textContent = 'Learn Less'; // Change button text
      card.classList.add('active'); // Add active class
    } else {
      additionalContent.style.display = 'none'; // Hide content
      this.textContent = 'Learn More'; // Change button text back
      card.classList.remove('active'); // Remove active class
    }
  });
});
