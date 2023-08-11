<?php
function deleteProject($id) {
    global $connection;
    
    $query = "DELETE FROM projects WHERE ID=$id";
    
    if (mysqli_query($connection, $query)) {
        return true;
    } else {
        return false;
    }
}
?>
