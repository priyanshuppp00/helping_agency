<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/nav.css">
</head>

<body>
  <div class="chat-widget" id="chatWidget">
    <button class="btn-close-custom" onclick="closePopup()" aria-label="Close">X</button>
    <div class="chat-header">Support Chat</div>
    <div class="chat-body" id="chatBody">
      <p><strong>AI:</strong> Hi! How can I assist you today?</p>
    </div>
    <div class="chat-footer">
      <input type="text" id="userInput" placeholder="Type your message...">
      <button class="btn btn-outline-primary w-50 sendMessage()">Send</button>
    </div>
  </div>

  <!-- Chat Toggle Button -->
  <div class="chat-widget-toggle" onclick="toggleChat()">
    <i class="fas fa-comment"></i>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>