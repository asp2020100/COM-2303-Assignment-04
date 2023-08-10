<?php
//include connection.php file

require_once("connection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST["id"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 

//Update data into database
$sql = "UPDATE user_details SET userName = '$username', userGmail = '$email', userPassword = '$password' WHERE id = '$id'";


//Check if query executed successfully

if($conn->query($sql) === TRUE){
    echo "<script>alert('Record updated successfully')</script>";
    echo "<script>window.location.href='display.php'</script>";
    exit();
}else{
    echo "Details not updated : " .$conn -> error;
}

}

//close connection
$conn->close();

?>