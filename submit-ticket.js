document.addEventListener('DOMContentLoaded', () => {
    const ticketForm = document.getElementById('ticket-form');

    ticketForm.addEventListener('submit', (event) => {
        // Basic validation
        const subject = document.getElementById('subject').value.trim();
        const priority = document.getElementById('priority').value.trim();
        const message = document.getElementById('message').value.trim();

        if (!subject || !priority || !message) {
            alert('Please fill out all required fields.');
            event.preventDefault(); // Prevent form submission
        } else {
            alert('Ticket submitted successfully!');
        }
    });
});
