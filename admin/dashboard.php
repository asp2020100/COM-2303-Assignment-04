<?php
include("config.php");
include("firebase.php");

if(!isset($_SESSION['user'])){
    header("location: login.php");
}else{
    echo "Welcome ".$_SESSION['user']['name']; 
    echo "<br><a href='logout.php'>Logout</a>";
}