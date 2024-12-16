<?php
// Include database connection file
require_once '../config/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));
    $mhs_id = htmlspecialchars(trim($_POST['mhs_id']));


    // Validate input data
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password) || empty($mhs_id)) {
        echo "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } elseif ($password !== $confirm_password) {
        echo "Passwords do not match.";
    } elseif ($mhs_id < 0) {
        echo "NIM must be a positive number.";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL statement
        $sql = "INSERT INTO users (username, email, password, mhs_id) VALUES (?, ?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sssi", $username, $email, $hashed_password, $mhs_id);

            // Execute the statement
            if ($stmt->execute()) {
                echo "Sign up successful.";
                header("Location: ../sign-in.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}
