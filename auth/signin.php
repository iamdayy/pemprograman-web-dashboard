<?php
session_start();
include_once('../config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: ../index.php");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "Invalid username.";
    }
    // header("Location: ../sign-in.php");
    echo "<div class='alert alert-danger'>$error</div>";
}
