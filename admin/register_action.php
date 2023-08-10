<?php
include("config.php");
include("firebase.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if(count($data) > 0){
    echo "Email already exists";
}else{
    $insert = $rdb->insert("/user", array(
        "name" => $name,
        "email" => $email,
        "password" => $password
    ));

    $result = json_decode($insert, true);
        if{!isset($result['name'])}{
            echo "Sing up success , Please login";
        }else{
            echo "Sing up failed"
    }
}
