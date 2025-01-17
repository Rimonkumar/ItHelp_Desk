<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <img src="../images/logo.png" alt="Logo" class="logo-icon">
                <h2>Smart Helpdesk</h2>
            </div>
            <div class="user-panel">
                <img src="../images/user.png" id="profile-img" alt="Profile" onerror="this.src='../images/user.png';">
                <div class="profile-dropdown">
                    <span id="profile-name">User Name</span>
                    <div id="profile-options" class="dropdown-content">
                        <a href="#" id="edit-profile">Edit Profile</a>
                        <a href="#" id="logout">Logout</a>
                    </div>
                </div>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="#" data-page="notifications" class="menu-item"><i class="fas fa-bell"></i> Notifications</a></li>
                    <li><a href="#" data-page="dashboard" class="menu-item"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li><a href="#" data-page="submit-ticket" class="menu-item"><i class="fas fa-ticket-alt"></i> Submit Ticket</a></li>
                    <li><a href="#" data-page="my-tickets" class="menu-item"><i class="fas fa-clipboard-list"></i> My Tickets</a></li>
                    <li><a href="#" data-page="chat" class="menu-item"><i class="fas fa-comments"></i> Chat</a></li>
                    <li><a href="#" data-page="calendar" class="menu-item"><i class="fas fa-calendar-alt"></i> Calendar</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content" id="content">
            <h1>Welcome to the User Dashboard</h1>
            <p>Select an option from the menu to get started.</p>
        </main>
    </div>

    <script src="user.js"></script>
</body>
</html>