<?php
session_start();

// Hard-coded username and password
$valid_username = "admin";
$valid_password = "pass";

$entered_username = $_POST['username'];
$entered_password = $_POST['password'];

if ($entered_username === $valid_username && $entered_password === $valid_password) {
    $_SESSION['authenticated'] = true;
    header('Location: display-us.php');
    exit;
} else {
    echo "Invalid credentials. <a href='login.php'>Go back to login</a>";
}
?>
