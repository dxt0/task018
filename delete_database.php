<?php
$conn = new mysqli('localhost', 'root', '', '');

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "DROP DATABASE IF EXISTS library";

if ($conn->query($sql) === TRUE) {
    echo "✅ Database deleted successfully!";
} else {
    echo "❌ Error deleting database: " . $conn->error;
}

$conn->close();
?>
