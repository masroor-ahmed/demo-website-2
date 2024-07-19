document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('surveyForm');
    const nextButton = document.getElementById('nextButton');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validate form
        if (form.checkValidity()) {
            // Collect form data
            const formData = new FormData(form);
            const surveyData = Object.fromEntries(formData.entries());

            // Redirect to the next page
            window.location.href = 'login.php';
        } else {
            // If the form is invalid, show validation messages
            form.reportValidity();
        }
    });
});