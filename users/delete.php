<?php
require_once "../config/connection.php";
// if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
//     parse_str(file_get_contents("php://input"), $_DELETE);
// }
$NIM = $_POST['NIM'];

// sql to delete a record
$sql = "DELETE FROM mahasiswa WHERE NIM=$NIM";


if ($conn->query($sql) === TRUE) {
    header("Location: /users");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
