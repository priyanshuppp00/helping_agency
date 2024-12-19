<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscription Form Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
  <style>
    /* Popup container */
    .subscribe-popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 400px;
      background-color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      z-index: 1050;
      padding: 1.5em;
      border-radius: 8px;
      animation: popupFadeIn 0.5s ease-in-out;
    }

    .subscribe-popup .popup-content {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .subscribe-popup h5 {
      margin-bottom: 1em;
    }

    .subscribe-popup .close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }

    .close-btn {
      background-color: #dc3545;
      color: white;
      border: none;
      border-radius: 4px;
      padding: 5px 10px;
      font-size: 16px;
    }

    @keyframes popupFadeIn {
      from {
        opacity: 0;
        transform: translate(-50%, -40%);
      }

      to {
        opacity: 1;
        transform: translate(-50%, -50%);
      }
    }

    /* Responsive styling */
    @media (max-width: 768px) {
      .subscribe-popup {
        width: 90%;
      }
    }
  </style>
</head>

<body>
  <!-- Subscription Popup -->
  <div class="subscribe-popup" id="subscribePopup">
    <div class="popup-content">
      <h5>Subscribe to Our Newsletter</h5>
      <span class="close-btn" onclick="closePopup()">&times;</span>
      <form method="POST" id="subscribeForm">
        <div class="mb-3">
          <label for="name" class="form-label">Full Name:</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number:</label>
          <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description:</label>
          <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="mb-3">
          <label for="inquiry" class="form-label">Inquiry:</label>
          <input type="text" class="form-control" id="inquiry" name="inquiry">
        </div>
        <button type="submit" class="btn btn-primary w-100">Subscribe</button>
      </form>
    </div>
  </div>

  <script>
    // Show the subscription popup after 5 seconds
    setTimeout(function() {
      if (!sessionStorage.getItem('popupShown')) {
        document.getElementById('subscribePopup').style.display = 'block';
        document.getElementById('subscribePopup').classList.add('show-animation'); // Add unique animation class
      }
    }, 5000); // Show popup after 5 seconds

    function closePopup() {
      document.getElementById('subscribePopup').style.display = 'none';
      sessionStorage.setItem('popupShown', 'true'); // Set this flag to prevent further popups
    }
  </script>

</body>

</html>