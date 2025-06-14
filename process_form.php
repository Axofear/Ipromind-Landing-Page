<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iprominddb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $fullName = htmlspecialchars(trim($_POST['fullName']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $business = htmlspecialchars(trim($_POST['business']));
    
    // Validate inputs
    $errors = [];
    
    if (empty($fullName)) {
        $errors[] = "Full name is required";
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (empty($phone)) {
        $errors[] = "Phone number is required";
    }
    
    if (empty($business)) {
        $errors[] = "Business name is required";
    }
    
    // If no errors, proceed with database insertion
    if (empty($errors)) {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO contacts (full_name, email, phone, business_name) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fullName, $email, $phone, $business);
        
        // Execute the statement
        if ($stmt->execute()) {
            // Success - redirect back with success message
            header("Location: index.php?success=1");
            exit();
        } else {
            $errors[] = "Database error: " . $stmt->error;
        }
        
        // Close statement
        $stmt->close();
    }
    
    // If there were errors, store them in session and redirect back
    if (!empty($errors)) {
        session_start();
        $_SESSION['form_errors'] = $errors;
        $_SESSION['form_data'] = $_POST;
        header("Location: index.php?success=0");
        exit();
    }
}

// Close connection
$conn->close();
?>