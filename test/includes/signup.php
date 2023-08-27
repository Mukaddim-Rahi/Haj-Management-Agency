<?php

if (isset($_POST["submit"])) {
    
    //echo "successful";



    $email = $_POST["email"];
    
    
    $psw = $_POST["psw"];
    
    
    $psw_repeat= $_POST["psw-repeat"];
    
    
    $name = $_POST["name"];
    
    
    $gender = $_POST["gender"];
    
    
    $date = $_POST["DOB"];
    $DOB = date("Y-m-d H:i:s", strtotime($date));
    
    
    $NID = $_POST["NID"];
    
    
    $package = $_POST["package"];
    
    
    $approved = "Pending";
    
    
    $guide = null;
    
    
    
    
    require 'dbh.php';
    require_once 'functions.php'; 
    
    
    if (emailExists($conn, $email)!== false){
        
        header("location: ../registration.php?error=emailTaken");
        exit();
        
    }
    
    
    //if (emptyInputSignup($DOB)!==false){
        
        //header("location: ../registration.php?error=emptyinput");
        //exit();
    //}
    
    
    if (pswMatch($psw, $psw_repeat)!== false){
        
        header("location: ../registration.php?error=passwordsdonotmatch");
        exit();
    }
    
    
   
    
    createUser($conn, $email, $psw, $name, $gender, $DOB, $NID, $package, $approved, $guide);
    
    
    
    
    
    
    
}



else
{
    header("location: ../registration.php");
}
    
   
