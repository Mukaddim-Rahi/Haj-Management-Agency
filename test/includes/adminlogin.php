<?php


if(isset($_POST["submit"])) {
    
    $adminID = $_POST["adminID"];
    $psw = $_POST["psw"];
    
    require 'dbh.php';
    require_once 'functions.php';
    
    
    loginAdmin($conn, $adminID, $psw);
    
    
    
}