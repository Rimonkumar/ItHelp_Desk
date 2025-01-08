document.getElementById('signup-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting immediately

    const email = document.getElementById('email').value.trim();
    const emailErrorDiv = document.getElementById('email-error');

    // Reset any previous error message
    emailErrorDiv.style.display = 'none';
    emailErrorDiv.textContent = '';

    // Check email uniqueness
    checkEmailUnique(email).then(isUnique => {
        if (!isUnique) {
            // Display email error message
            emailErrorDiv.style.display = 'block';
            emailErrorDiv.textContent = "Email is already registered!";
        } else {
            // If email is unique, submit the form
            document.getElementById('signup-form').submit();
        }
    }).catch(error => {
        // Handle any errors
        console.error('Error occurred during email check:', error);
        emailErrorDiv.style.display = 'block';
        emailErrorDiv.textContent = 'An error occurred. Please try again.';
    });
});

async function checkEmailUnique(email) {
    const response = await fetch('check-email.php?email=' + encodeURIComponent(email));
    const result = await response.json();
    return result.isUnique;  // Return true if unique, false if not
}
