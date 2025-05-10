<?php
$conn = new mysqli('localhost', 'root', '', 'library');

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "DROP TABLE IF EXISTS book_records";

if ($conn->query($sql) === TRUE) {
    echo "✅ Table deleted successfully!";
} else {
    echo "❌ Error deleting table: " . $conn->error;
}

$conn->close();
?>
