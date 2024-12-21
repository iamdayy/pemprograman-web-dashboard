<?php
require_once "../config/connection.php";

// Get the data from the form (assuming method is POST)
$NIM = strval($_POST['NIM']);
$Nama = $_POST['Nama'];
$Jekel = $_POST['Jekel'];
$Kelas = $_POST['Kelas'];
$Angkatan = intval($_POST['Angkatan']);
$Semester = intval($_POST['Semester']);

$sql = "UPDATE mahasiswa SET Nama='" . $Nama . "', Jekel='" . $Jekel . "', Kelas='" . $Kelas . "', Angkatan=" . $Angkatan . ", Semester=" . $Semester . " WHERE NIM=" . $NIM;

// Execute the statement
if ($conn->query($sql) === TRUE) {
    header("Location: ../users");
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
