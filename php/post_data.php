<?php

// // Get user input
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$p = $_POST['p'];

// Set cookies for the user
setcookie('name', $name, time() + (86400 * 30), "/");
setcookie('mobile', $mobile, time() + (86400 * 30), "/");
setcookie('city', $city, time() + (86400 * 30), "/");
setcookie('p', $p, time() + (86400 * 30), "/");

header('Location: ../share2.php');
