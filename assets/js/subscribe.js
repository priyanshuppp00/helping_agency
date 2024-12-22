document.addEventListener("DOMContentLoaded", function () {
  // Show the subscription popup after 3 seconds if not already submitted
  setTimeout(function () {
    if (!localStorage.getItem("popupSubmitted")) {
      document.getElementById("subscribePopup").style.display = "block";
    }
  }, 3000);

  // Close the subscription popup
  window.closePopup = function () {
    document.getElementById("subscribePopup").style.display = "none";
  };

  // Close the success popup
  window.closeSuccessPopup = function () {
    document.getElementById("successPopup").style.display = "none";
  };

  // Handle form submission with AJAX
  document.getElementById("subscribeForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch(this.action, {
      method: this.method,
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          // Hide the subscription popup
          document.getElementById("subscribePopup").style.display = "none";

          // Show the success popup
          const successPopup = document.getElementById("successPopup");
          successPopup.style.display = "block";

          // Set localStorage flag to prevent the popup from showing again
          localStorage.setItem("popupSubmitted", "true");

          // Close the success popup and redirect after 3 seconds
          setTimeout(() => {
            successPopup.style.display = "none";
            window.location.href = "index.php";
          }, 3000);
        } else {
          alert(data.message);
        }
      })
      .catch(() => {
        alert("Something went wrong. Please try again.");
      });
  });
});
