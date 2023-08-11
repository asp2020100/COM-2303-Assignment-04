<?php
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
