<?php
// Include your database connection code
$hostname = "localhost";
$username = "root";
$password = "";
$database = "projects";


$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define the getProjects function to retrieve project data from the database
function getProjects() {
    global $connection;
    $query = "SELECT * FROM projects";
    $result = mysqli_query($connection, $query);
    
    $projects = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $projects[] = $row;
    }
    
    return $projects;
}
?>
