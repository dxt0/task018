<?php
$conn = new mysqli('localhost', 'root', '', 'library');

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS book_records (
    Book_Library_No INT PRIMARY KEY,
    Book_Name VARCHAR(255),
    Author_Name VARCHAR(255),
    Book_Edition VARCHAR(100),
    Price DECIMAL(10,2)
)";

if ($conn->query($sql) === TRUE) {
    echo "✅ Table created successfully!";
} else {
    echo "❌ Error creating table: " . $conn->error;
}

$conn->close();
?>
