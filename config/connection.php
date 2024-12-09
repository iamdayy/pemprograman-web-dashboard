<?php
$servername = "103.82.240.204:3306";
$username = "iamdayy";
$password = "I@mdayy1100";
$dbname = "itsnu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    die();
    die("Connection failed: " . $conn->connect_error);
}
