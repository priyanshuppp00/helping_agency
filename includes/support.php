<!-- Chat Widget -->
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