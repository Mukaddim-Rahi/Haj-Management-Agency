<?php
  session_start();
?>
   

<html>
    

<head>
    
    <link rel="stylesheet" href="profile.css">
    
</head>
   
<section class="header">
   
   
   <!--<form action="......" method="post"> -->
   
       
  <div class="container">
   
   <div class="description">
      
       <h1>Client Profile</h1>
       
       
       </div>
   
   
    

    <hr>
    
    


    <label for="email"><b>Email:</b></label> <br>

    <?php
                      
     if (isset($_SESSION["userEmail"])) {
       
         echo"<output> {$_SESSION["userEmail"]}  </output>";
                            
     }
     ?>
    
    
   
    
    
    
    
    
    
     <label for="name"><b>Name:</b></label> <br>
    
    <?php
                      
     if (isset($_SESSION["userName"])) {
       
         echo"<output> {$_SESSION["userName"]}  </output>";
                            
     }
                        
    ?>

   
   
   
   
   
    
    
    
    
    <label for="gender"><b>Gender:</b></label> <br>
    
    
    
    
    <?php
                      
     if (isset($_SESSION["userGender"])) {
         
         
       if($_SESSION["userGender"]=="M"){
           
           echo"<output>Male</output>";
           
       }
         
       else if ($_SESSION["userGender"]=="F"){
           
           echo"<output>Female</output>";
       }
                            
     }
                        
    ?>
    
    
    
    
    
    
    <label for="DOB"><b>Date of Birth:</b></label> <br>
    
     <?php
                      
     if (isset($_SESSION["userDOB"])) {
       
         echo"<output> {$_SESSION["userDOB"]}  </output>";
                            
     }
                        
    ?>
    
    
    
    <label for="NID"><b>NID:</b></label> <br>
    <?php
                      
     if (isset($_SESSION["userNID"])) {
       
         echo"<output> {$_SESSION["userNID"]}  </output>";
                            
     }
                        
    ?>
    
  
    
    <label for="package"><b>Selected Package:</b></label> <br>
    <?php
                      
     if (isset($_SESSION["userPackage"])) {
       
         echo"<output> {$_SESSION["userPackage"]}  </output>";
                            
     }
                        
    ?>
    
   
    
    
    <label for="approved"><b>Approval:</b></label> <br>
    <?php
                      
     if (isset($_SESSION["userApproved"])) {
       
         echo"<output> {$_SESSION["userApproved"]}  </output>";
                            
     }
      
      else {
          echo"<output>Pending</output>";
          
      }
          
                        
    ?>
    
   
    
    <label for="guide"><b>Guide ID:</b></label> <br>
    <?php
                      
     if (isset($_SESSION["userGuide"])) {
       
         echo"<output>{$_SESSION["userGuide"]}</output>";
                            
     }
      
      else {
          echo"<output>Pending</output>";
          
      }
                        
    ?>
    
    
    
    
   

 <!-- </form> -->
    
    
    
</section>

 


</html>