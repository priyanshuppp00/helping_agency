<div class="subscribe-popup" id="subscribePopup" style="display: none;">
  <div class="position-relative">
    <button class="btn-close-custom" onclick="closePopup()" aria-label="Close">X</button>
    <h3 class="text-center mb-4">Get In Touch</h3>
    <form id="subscribeForm" method="POST" action="php/subscribe_process.php">
      <div class="mb-3">
        <label for="name" class="form-label">Full Name:</label>
        <input type="text" class="form-control" id="name" name="name" required />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email Address:</label>
        <input type="email" class="form-control" id="email" name="email" required />
      </div>
      <div class="mb-3">
        <label for="service" class="form-label">Choose a Service:</label>
        <select name="service" id="service" class="form-select" required>
          <option value="Lifeline Solution">Lifeline Solution</option>
          <option value="CareConnect Services">CareConnect Services</option>
          <option value="Community Reach Services">Community Reach Services</option>
          <option value="Counseling">Counseling</option>
          <option value="Financial Aid">Financial Aid</option>
          <option value="Educational Support">Educational Support</option>
        </select>
      </div>
      <button type="submit" class="btn btn-outline-primary w-50">Send</button>
    </form>
  </div>
</div>

<!-- Success Popup -->
<div class="success-popup" id="successPopup" style="display: none;">
  <div class="position-relative text-center">
    <h3>We will contact you soon!</h3>
    <button class="btn btn-outline-secondary mt-3" onclick="closeSuccessPopup()">Close</button>
  </div>
</div>