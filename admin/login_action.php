<?php
include("config.php");
include("firebaseRDB.php");

$email = $_POST['email'];
$password = $_POST['password'];


if($email == ""){
    echo "Email is empty";
}else if($password == ""){
    echo "Password is empty";  
}else{
    $rdb = new firebaseRDB($databaseURL);
    $retrieve = $rdb->retrieve("/user","email","EQUAL", $email);
    $data = json_decode($retrieve, 1);
    
    if(!isset($data['email'])) {
        echo "Email not found";
    }else if($data['password'] != $password){
        echo "Invalid password";
    }else{
        echo "Login success";
    }
}
