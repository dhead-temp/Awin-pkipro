<?php
// Establish database connection
$dbhost = "localhost";
$dbuser = "tmkpfnvkcc";
$dbpass = "ZbPj4rKN3z";
$dbname = "tmkpfnvkcc";

// Create a new mysqli object to connect to the database
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$name = $conn->real_escape_string($_POST['name']);
$mobile = $conn->real_escape_string($_POST['mobile']);
$city = $conn->real_escape_string($_POST['city']);
$p = $conn->real_escape_string($_POST['p']);

// Set cookies for the user
setcookie('name', $name, time() + (86400 * 30), "/");
setcookie('mobile', $mobile, time() + (86400 * 30), "/");
setcookie('city', $city, time() + (86400 * 30), "/");
setcookie('p', $p, time() + (86400 * 30), "/");

// Check if the user already exists
$check_query = "SELECT * FROM users WHERE mobile='$mobile'";
$check_result = $conn->query($check_query);
if ($check_result->num_rows > 0) {
    echo "You have already submitted your details!";
} else {
     
    // Insert user data into database
    $insert_query = "INSERT INTO users (name, mobile, city, p) VALUES ('$name', '$mobile', '$city', '$p')";
    if ($conn->query($insert_query) === TRUE) {
        
        exit();
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();

  // Redirect to another page
 // header('Location: ../share2.php');
?>
