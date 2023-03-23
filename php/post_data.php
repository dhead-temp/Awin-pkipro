<?php
// Establish database connection
$dbhost = "localhost";
$dbuser = "tmkpfnvkcc";
$dbpass = "ZbPj4rKN3z";
$dbname = "tmkpfnvkcc";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user input
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];

// Check if the user already exists
$check_query = "SELECT * FROM users WHERE mobile='$mobile'";
$check_result = mysqli_query($conn, $check_query);
if (mysqli_num_rows($check_result) > 0) {
    echo "You have already submitted your details!";
} else {
    // Insert user data into database
    $insert_query = "INSERT INTO users (name, mobile, city) VALUES ('$name', '$mobile', '$city')";
    if (mysqli_query($conn, $insert_query)) {
        // Set cookies for the user
        setcookie('name', $name, time() + (86400 * 30), "/");
        setcookie('mobile', $mobile, time() + (86400 * 30), "/");
        setcookie('city', $city, time() + (86400 * 30), "/");
        
        // Redirect to another page
        header('Location: ../share2.php');
    } else {
        echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
