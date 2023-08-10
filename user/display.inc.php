<?php
//insert DB connection
require_once 'connection.php';

//Retrieve data from database
$sql = "SELECT * FROM user_details";
$result = $conn->query($sql);

if ($result->num_rows >0 ){
    while ($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['userName']."</td>";
        echo "<td>".$row['userGmail']."</td>";
        echo "<td>".$row['userPassword']."</td>";
        echo "<td>";
        echo"<button onClick=\"redirectToUpdateForm(".$row[$id].")\">Update</button>";
        echo"<button>Delete</button>";
        echo "</td>";
        echo "</tr>";
    }
}else{
    echo "Data not found";
}
//close connection
$conn->close();

?>
