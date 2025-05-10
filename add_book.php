<?php
// Database connection details
$server = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Collect POST data
$Book_Library_No = $_POST['Book_Library_No'];
$Book_Name = $_POST['Book_Name'];
$Author_Name = $_POST['Author_Name'];
$Book_Edition = $_POST['Book_Edition'];
$Price = $_POST['Price'];
$No_of_Pages = $_POST['No_of_Pages'];

// Insert SQL
$sql = "INSERT INTO book_records (Book_Library_No, Book_Name, Author_Name, Book_Edition, Price, no_of_pages)
VALUES ('$Book_Library_No', '$Book_Name', '$Author_Name', '$Book_Edition', '$Price', '$No_of_Pages')";

if ($conn->query($sql) === TRUE) {
    echo "<h2 style='color:green; text-align:center;'>✅ Book Added Successfully!</h2>";
    echo "<p style='text-align:center;'><a href='add_book.html'>➕ Add Another</a> | <a href='index.html'>🏠 Home</a></p>";
} else {
    echo "<h2 style='color:red; text-align:center;'>❌ Error: " . $conn->error . "</h2>";
}

$conn->close();
?>
