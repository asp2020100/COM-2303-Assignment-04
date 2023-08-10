<?php
include("config.php");
include("firebase.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if($name == ""){
    echo "Name is required";
}else if($email == ""){
    echo "Email is required";
}else if($password == ""){
    echo "Password is required";
}else{
    $rdp = new firebaseRDB($databaseURL);
    $retrieve = $rdb->retrieve("/user","email", "EQUAL",$email);
    $data = json_decode($retrieve, 1);

    if(isset($data['email'])){
        echo "Email already exists";
    }else{
        $insert = $rdb->insert("/user", [
            "name" => $name,
            "email" => $email,
            "password" => $password,
        ]);

        $result = json_decode($insert, 1);
        if(isset($result['name'])){
            echo "Register success";
        }else{
            echo "Register failed";
        }
    
    }
}