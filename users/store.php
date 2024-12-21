<?php
require_once "../config/connection.php";

// Assign POST values to variables
$NIM = strval($_POST['NIM']);
$Nama = $_POST['Nama'];
$Jekel = $_POST['Jekel'];
$Kelas = $_POST['Kelas'];
$Angkatan = intval($_POST['Angkatan']);
$Semester = intval($_POST['Semester']);

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO mahasiswa (NIM, Nama, Jekel, Kelas, Angkatan, Semester) VALUES (?, ?, ?, ?, ?, ?)");

// Bind the parameters
$stmt->bind_param("ssssii", $NIM, $Nama, $Jekel, $Kelas, $Angkatan, $Semester);

// Execute the statement
if ($stmt->execute()) {
    header("Location: ./users");
} else {
    echo "Data gagal disimpan";
}

// Close the statement and connection
$stmt->close();
$conn->close();
