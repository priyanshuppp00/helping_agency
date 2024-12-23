document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.accordion-button').forEach(button => {
    button.addEventListener('click', function () {
      const targetId = this.getAttribute('data-bs-target');
      const collapseElement = document.querySelector(targetId);
      const isExpanded = this.getAttribute('aria-expanded') === 'true';

      // Toggle aria-expanded
      this.setAttribute('aria-expanded', !isExpanded);
      
      // Toggle the collapse element visibility
      collapseElement.classList.toggle('show');

      // Toggle button's collapsed class
      this.classList.toggle('collapsed');
    });
  });
});
