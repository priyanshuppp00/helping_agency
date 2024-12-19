<!-- Chat Widget -->
<div class="chat-widget" id="chatWidget">
  <div class="chat-header">Support Chat</div>
  <div class="chat-body" id="chatBody">
    <p><strong>AI:</strong> Hi! How can I assist you today?</p>
  </div>
  <div class="chat-footer">
    <input type="text" id="userInput" placeholder="Type your message...">
    <button onclick="sendMessage()">Send</button>
  </div>
</div>

<!-- Chat Toggle Button -->
<div class="chat-widget-toggle" onclick="toggleChat()">
  <i class="fas fa-comment"></i>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="../assets/js/support.js"></script>