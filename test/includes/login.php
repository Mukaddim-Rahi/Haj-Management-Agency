<?php


if(isset($_POST["submit"])) {
    
    $email = $_POST["email"];
    $psw = $_POST["psw"];
    
    require 'dbh.php';
    require_once 'functions.php';
    
    
    loginUser($conn, $email, $psw);
    
    
    
}