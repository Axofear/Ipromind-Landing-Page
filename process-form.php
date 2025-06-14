<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize inputs
    $fullName = trim($_POST['fullName']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $business = trim($_POST['business']);

    // Validate inputs
    if (empty($fullName)) {
        $errors[] = "Full Name is required";
    }
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    if (empty($phone)) {
        $errors[] = "Contact Number is required";
    }
    if (empty($business)) {
        $errors[] = "Business Name is required";
    }

    // If no errors, proceed with database insertion
    if (empty($errors)) {
        try {
            // Create database connection
            $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepare and execute SQL statement
            $stmt = $conn->prepare("INSERT INTO contacts (full_name, email, phone, business_name) 
                                   VALUES (:full_name, :email, :phone, :business_name)");
            
            $stmt->bindParam(':full_name', $fullName);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':business_name', $business);
            
            $stmt->execute();
            
            $success = true;
        } catch(PDOException $e) {
            $errors[] = "Database error: " . $e->getMessage();
        }
        
        $conn = null;
    }
}

// Store data in session to pass back to form
session_start();
$_SESSION['form_data'] = [
    'fullName' => $fullName,
    'email' => $email,
    'phone' => $phone,
    'business' => $business,
    'errors' => $errors,
    'success' => $success
];

// Redirect back to form
header('Location: index.html');
exit();
?>