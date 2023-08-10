<?php
//include connection.php file

require_once("connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    //Check Email is already exist or not
    $checkQuery = "SELECT * FROM user_details WHERE userGmail = '$email'";
    $result = $conn->query($checkQuery);

    if($result->num_rows >0){
        //Email already exist
        echo "<script>alert('Email already exist')</script>";
        echo "<script>window.location.href='insert.php'</script>";
    }else{
        //Email not exist  

   //Insert data into database
   $sql = "INSERT INTO user_details (userName,userGmail,userPassword) 
   VALUES ('$username', '$email', '$password')";

   //Check if query executed successfully
    if($conn->query($sql) === TRUE)
    {
        echo "<script>alert('New record created successfully')</script>";
        echo "<script>window.location.href='display.php'</script>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}

//colse connection
$conn->close();
?>