<?php
$conn = new mysqli('localhost', 'root', '', '');

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS library";

if ($conn->query($sql) === TRUE) {
    echo "✅ Database created successfully!";
} else {
    echo "❌ Error creating database: " . $conn->error;
}

$conn->close();
?>
