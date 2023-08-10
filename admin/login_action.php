<?php
include("config.php");
include("firebase.php");

$email = $_POST['email'];
$password = $_POST['password'];

if($email == "" || $password == ""){
    header("location: login.php?error=Please fill in all the fields.");
}else{
    $rdb = new firebase($databaseURL);
    $retrieve=$rdb->retrieve("/user","email","EQUAL", $email);
    
    $data=json_decode($retrieve, true);

    if(count($data) == 0){
        echo "Email not found";
    }else{
        $id = array_keys($data)[0];
        if{$data[$id]['password'] == $password}{
            $_SESSION['user'] = $data[$id];
            header("location: dashboard.php");
        }else{
            echo "Login failed";
        }
    }
}
