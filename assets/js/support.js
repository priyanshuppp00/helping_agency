
    // Toggle Chat Widget Visibility
    function toggleChat() {
      const chatWidget = document.getElementById('chatWidget');
      if (chatWidget.style.display === 'none' || chatWidget.style.display === '') {
        chatWidget.style.display = 'block';
      } else {
        chatWidget.style.display = 'none';
      }
    }

    // Send Message Functionality
    function sendMessage() {
      const userInput = document.getElementById('userInput');
      const chatBody = document.getElementById('chatBody');
      const message = userInput.value.trim();

      if (message) {
        // Display User's Message
        const userMessage = `<p><strong>You:</strong> ${message}</p>`;
        chatBody.innerHTML += userMessage;

        // Display AI Response
        setTimeout(() => {
          const aiMessage = `<p><strong>AI:</strong> ${getAIResponse(message)}</p>`;
          chatBody.innerHTML += aiMessage;
          chatBody.scrollTop = chatBody.scrollHeight; // Scroll to the bottom
        }, 500);

        userInput.value = ''; // Clear input
      }
    }

    // Basic AI Responses
    function getAIResponse(message) {
      const responses = {
        hello: "Hello! How can I assist you?",
        services: "We provide various services. Please check our Services page for more information.",
        contact: "You can reach us through the Contact page or this chat.",
        default: "I'm sorry, I don't understand that. Can you rephrase?"
      };

      message = message.toLowerCase();
      return responses[message] || responses['default'];
    }