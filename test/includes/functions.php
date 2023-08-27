<?php



function emptyInputSignup($DOB) {
    
    $result;
    
    if (empty($DOB)){
        $result =  true;
    } 
    
    else{
        $result= false;
    }
}




function pswMatch($psw, $psw_repeat) {
    
    $result;
    
    if ($psw != $psw_repeat){
        $result =  true;
    } 
    
    else{
        $result= false;
    }
    
    return $result;
    
}



function emailExists($conn, $email){
    
    $sql = "SELECT * FROM users WHERE email =?;";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)){
        
        header ("location: ../registration.php?error=stmtfailed");
        
        exit();
        
    }
    
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    
    }
    
    else{
        $result = false;
        return $result;
    }
    
    mysqli_stmt_close($stmt);
    
}



function createUser($conn, $email, $psw, $name, $gender, $DOB, $NID, $package, $approved, $guide){
    
    $sql = "INSERT INTO users (email, name, pass, gender, DOB, NID, package, approved, guideID) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ? );";
    $stmt = mysqli_stmt_init($conn);
    
    if (! mysqli_stmt_prepare($stmt, $sql)){
        
        header ("location: ../registration.php?error=stmtfailed");
        
        exit();
        
    }
    
    mysqli_stmt_bind_param($stmt, "sssssissi", $email, $name, $psw, $gender, $DOB, $NID, $package, $approved, $guide);
    mysqli_stmt_execute($stmt);    
    mysqli_stmt_close($stmt);
    header ("location: ../log_in.php?Error=none");
    exit();
    
}



function loginUser($conn, $email, $psw) {
    $emailExists = emailExists($conn, $email);
    
    if ($emailExists === false) {
        header("location: ../log_in.php?error=wrongEmail");
        exit();
        
    }
    
    $pswR =$emailExists["pass"];
    
    if($pswR != $psw){
        
        header("location: ../log_in.php?error=wrongPass");
        exit();
        
    }
    
    if($pswR == $psw){
        
        session_start();
        $_SESSION["userid"] = $emailExists["userID"];
        $_SESSION["userName"] = $emailExists["name"];
        $_SESSION["userEmail"] = $emailExists["email"];
        $_SESSION["userDOB"] = $emailExists["DOB"];
        $_SESSION["userGender"] = $emailExists["gender"];
        $_SESSION["userNID"] = $emailExists["NID"];
        $_SESSION["userPackage"] = $emailExists["package"];
        $_SESSION["userApproved"] = $emailExists["approved"];
        $_SESSION["userGuide"] = $emailExists["guideID"];
        
        
        header("location: ../index.php?error=NoError");
        exit();
        
    
    }
    
    
    
}




function adminIDExists($conn, $adminID){
    
    $sql = "SELECT * FROM admin WHERE adminID =?;";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)){
        
        header ("location: ../admin_log_in.php?error=stmtfailed");
        
        exit();
        
    }
    
    mysqli_stmt_bind_param($stmt, "s", $adminID);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    
    }
    
    else{
        $result = false;
        return $result;
    }
    
    mysqli_stmt_close($stmt);
    
}



function loginAdmin($conn, $adminID, $psw) {
    $adminIDExists = adminIDExists($conn, $adminID);
    
    if ($adminIDExists === false) {
        header("location: ../admin_log_in.php?error=wrongID");
        exit();
        
    }
    
    $pswR =$adminIDExists["pass"];
    
    if($pswR != $psw){
        
        header("location: ../admin_log_in.php?error=wrongPass");
        exit();
        
    }
    
    if($pswR == $psw){
        
        session_start();
        
        $_SESSION["AdminID"] = $adminIDExists["adminID"];
        
        
        header("location: ../index.php?error=NoError");
        exit();
        
    
    }
    
    
    
}




