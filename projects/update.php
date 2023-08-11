<?php
function updateProject($id, $title, $description, $image) {
    global $connection;
    $title = mysqli_real_escape_string($connection, $title);
    $description = mysqli_real_escape_string($connection, $description);
    $image = mysqli_real_escape_string($connection, $image);
    
    $query = "UPDATE projects SET Title='$title', Description='$description', Image='$image' WHERE ID=$id";
    
    if (mysqli_query($connection, $query)) {
        return true;
    } else {
        return false;
    }
}
?>
