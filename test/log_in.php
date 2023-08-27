
    

<head>
    
    <link rel="stylesheet" href="registration.css">
    
</head>
   
<section class="header">
   
   
   <form action="includes/login.php" method="post">
   
       
  <div class="container">
   
   <div class="description">
       <h1>Log-In Page</h1> <br>
       <p>Please enter your registered Email ID and password below.</p>
       </div>
   
   
    
    
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    
      
    <button type="submit" class="registerbtn" name="submit">Log-In</button>
 </div>
  
  

  <div class="container signin">
    <p>Don't have an account? <a href="http://localhost:8080/test/registration.php">Register here.</a>.</p>
  </div>
</form>
    
    
    
</section>

 


</html>