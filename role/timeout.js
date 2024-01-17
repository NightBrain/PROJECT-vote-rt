// Set the session timeout duration in seconds
var sessionTimeout = 60; // 30 minutes

// Initialize countdown timer
var countdown = sessionTimeout;
var countdownElement = document.getElementById('countdown');

function updateCountdown() {
    var minutes = Math.floor(countdown / 60);
    var seconds = countdown % 60;

    // Display the countdown timer
    countdownElement.textContent = 'Session Timeout in: ' + 
        (minutes < 10 ? '0' : '') + minutes + ':' +
        (seconds < 10 ? '0' : '') + seconds;

    // Update countdown
    countdown--;

    // Redirect to login page if session timeout
    if (countdown < 0) {
        location.href = location.href;
    }
}

// Update countdown every second
setInterval(updateCountdown, 1000);