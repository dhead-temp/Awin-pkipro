<?php

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

header('Location: ../share2.php');

?>


