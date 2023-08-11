<?php
// Start the session
session_start();

if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: login.php');
    exit;
}
// Logout functionality
if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit;
}

// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactme";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete functionality

if (isset($_GET['delete']) && isset($_GET['email'])) {
    $deleteEmail = $_GET['email'];
    $sql = "DELETE FROM contact_us WHERE email = '$deleteEmail'";
    if ($conn->query($sql) === TRUE) {
        // Record deleted successfully
        header('Location: display-us.php');
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Retrieve data from the database
$sql = "SELECT * FROM contact_us";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Saved Data</title>
    <link rel="stylesheet" type="text/css" href="display-us.css">
</head>
<body>
<div class="container">
        <h1>Saved Contact Data</h1>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='contact-info'>";
            echo "<p><strong>Name:</strong> " . $row["name"] . "<br>";
            echo "<strong>Email:</strong> " . $row["email"] . "<br>";
            echo "<strong>Message:</strong> " . $row["message"] . "</p>";
            echo "<a href='?delete=true&email=" . $row["email"] . "'>Delete</a>";
            echo "</div>";
        }
    } else {
        echo "No data to display.";
    }
    ?>
    <div class="logout">
            <a href="?logout=true">Logout</a>
        </div>
    </div>
</body>
</html>
