<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$host = "sql102.infinityfree.com";  
$user = "if0_38587867_XXX";  // Replace 'XXX' with actual username
$password = "Vanshshah2004";  // Ensure this is correct
$database = "if0_38587867_XXX";  // Replace 'XXX' with actual DB name

// Connect to the database
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Database connected successfully!";
}
?>
