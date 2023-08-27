<html>
    

<head>
    
    <link rel="stylesheet" href="registration.css">
    
</head>
   
<section class="header">
   
   
   <form action="includes/signup.php" method="post">
   
       
  <div class="container">
   
   <div class="description">
      
       <h1>Register</h1>
       
       <p>Please fill in this form to create an account.</p>
       
       </div>
   
   
    

    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" required>
    
    <label for="gender"><b>Gender</b></label> <br>
    <select name="gender" id="gender">
    <option value="M">Male</option>
    <option value="F">Female</option>
    </select>
    <br> <br>
    
    
    <label for="DOB"><b>Date of Birth</b></label>
    <input type="date" id="DOB" name="DOB">
    <br> <br>
    
    
    <label for="NID"><b>National ID</b></label>
    <input type="text" placeholder="Enter NID Number" name="NID" id="NID" required>
    
    
    <label for="package"><b>Select Package</b></label> <br>
    <select name="package" id="package">
    <option value="Luxury">Luxury</option>
    <option value="Regular">Regular</option>
    <option value="Regular">Umrah</option>
    </select>
    <br> <br>
    
      
    <button type="submit" class="registerbtn" name="submit">Register</button>
  </div>
  
  

  <div class="container signin">
    <p>Already have an account? <a href="http://localhost:8080/test/log_in.php">Sign in</a>.</p>
  </div>
</form>
    
    
    
</section>

 


</html>