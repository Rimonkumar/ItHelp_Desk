<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Ticket</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="submit-ticket">
        <h2>Submit a New Ticket</h2>
        <form id="ticket-form" action="process-ticket.php" method="POST">
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" placeholder="Enter ticket subject" required>

            <label for="priority">Priority:</label>
            <select id="priority" name="priority" required>
                <option value="">Select Priority</option>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" placeholder="Enter ticket details" required></textarea>

            <label for="attachment">Attachment:</label>
            <input type="file" id="attachment" name="attachment">

            <button type="submit">Submit</button>
        </form>
    </div>
    <script src="submit-ticket.js"></script>
</body>
</html>
