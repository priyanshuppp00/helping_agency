function onGoogleLoginSuccess(googleUser) {
  const idToken = googleUser.getAuthResponse().id_token;

  // Send ID token to the server
  $.ajax({
      url: '../google_login_process.php',
      type: 'POST',
      data: {
          idToken: idToken
      },
      success: function(response) {
          response = JSON.parse(response);
          if (response.success) {
              // Redirect to dashboard or homepage
              window.location.href = '../code/home.php';
          } else {
              alert(response.message);
          }
      },
      error: function(error) {
          console.error('Error during Google login:', error);
      }
  });
}

function onGoogleLoginFailure(error) {
  console.error('Google login failed:', error);
}

function attachGoogleLoginButton() {
  gapi.auth2.getAuthInstance().attachClickHandler('google-login-button', {}, onGoogleLoginSuccess, onGoogleLoginFailure);
}

gapi.load('auth2', function() {
  gapi.auth2.init({
      client_id: '912224475790-nlfokk6eat2ttinnc3vh02k1745rcf01.apps.googleusercontent.com',
      scope: 'email profile'
  }).then(attachGoogleLoginButton);
});
