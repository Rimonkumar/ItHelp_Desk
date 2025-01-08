<?php
// Include the database connection
require_once 'db.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and retrieve POST data
    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $password = trim($_POST['pass']);
    $cpassword = trim($_POST['cpassword']);
    $role = $conn->real_escape_string(trim($_POST['role']));
    $birth_date = $conn->real_escape_string(trim($_POST['birth_date']));
    $phone_number = $conn->real_escape_string(trim($_POST['phone']));
    $address = $conn->real_escape_string(trim($_POST['address']));
    $gender = $conn->real_escape_string(trim($_POST['gender']));
    $policy = isset($_POST['policy']) ? 1 : 0;

    // Check if email already exists in the database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // If email is already taken, redirect back with an error
        header('Location: signup.php?email_error=Email%20is%20already%20registered!');
        exit;
    }

    // Validate passwords match
    if ($password !== $cpassword) {
        // If passwords do not match, show an error
        header('Location: signup.php?email_error=Passwords%20do%20not%20match!');
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert into the database
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, role, date_of_birth, phone_number, address, gender, policy) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $name, $email, $hashedPassword, $role, $birth_date, $phone_number, $address, $gender, $policy);

    if ($stmt->execute()) {
        // Redirect to login page if registration is successful
        header('Location: login.php');
    } else {
        // If there was an error with the query
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
