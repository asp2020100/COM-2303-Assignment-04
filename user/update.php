<?php
//DB connection
require_once("connection.php");

//check id

if (isset($GET['id'])){
    $id = $_GET['id'];

    //retrieve data from database
    $sql = "SELECT * FROM user_details WHERE id = '$id'";
    $result = $conn->query($sql);

    if($result->num_rows >0){
       $row = $result->fetch_assoc();
        $username = $row['userName'];
        $email = $row['userGmail'];
        $password = $row['userPassword'];


        //Display data in form
        echo "<form action='update.inc.php' method='POST'>";

        echo "<label for name >Username</label><br>";
        echo "<input type='text' name='username' value='$username'><br>";

        echo "<label for name >Email</label><br>";
        echo "<input type='text' name='email' value='$email'><br>";

        echo "<label for name >Password</label><br>";
        echo "<input type='text' name='password' value='$password'><br>";

        echo "<button type='submit' name='update'>Update</button>";
        echo "</form>";


        }else{
            echo "No results";
        }
    
    }else{
        echo "No id";
    }
?>