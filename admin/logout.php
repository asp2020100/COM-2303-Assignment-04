<?php
include("config.php");
include("firebase.php");

if(!isset($_SESSION['user'])){
    unset($_SESSION['user']);
}

header("location: login.php");