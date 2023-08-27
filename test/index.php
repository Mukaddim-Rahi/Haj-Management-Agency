<?php
  session_start();
?>


<!DOCTYPE html>
<html>

  <head>
          <meta name="viewpoint" content="with=device-width, initial-scale=1.0">      

          <title> North South Hajj Agency </title>
          
          <link rel="stylesheet" href="style.css">
          
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600;700&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">

  </head>


  <body>
     
     
     
     
     
      
      <!--------Header and Menu----------->
      
      <section class= "header">
          <nav>
              <a href="index.php"><img src="Pictures/logo.png"></a>
              <div class="nav-links" id="navLinks">
                 <i class="fa fa-times" onclick="hideMenu()"></i>
                  <ul>
                      <li><a href="">Home</a></li>
                      <li><a href="">About</a></li>
                      <li><a href="">Packages</a></li>
                      <?php
                      
                        if (isset($_SESSION["userName"])) {
                            echo"<li><a href='profile.php'>Profile</a></li>";
                            echo"<li><a href='includes/logout.php'>Log-Out</a></li>";
                        }
                      
                        else if (isset($_SESSION["AdminID"])) {
                            echo"<li><a href='clients.php'>Clients</a></li>";
                            echo"<li><a href='includes/logout.php'>Log-Out</a></li>";
                            
                        }
                        
                        else {
                            echo"<li><a href='registration.php'>Register</a></li>";
                            echo"<li><a href='log_in.php'>Log-in</a></li>";
                            echo"<li><a href='admin_log_in.php'>Admin</a></li>";
                        }
                      
                      ?>
                  </ul>
              </div>
              <i class="fa fa-bars" onclick="showMenu()"></i>
          </nav>
        
        <div class="text-box">
            <h1>North South Travels</h1>
            <p>
                Assisting in your journey of seeking the one and only divine
            </p>
            <a href="" class="hero-btn">Visit Us To Know More</a>
        </div>
                
      </section>
      
      
      
      
      
      
       <!--------Packages----------->
      
      <section class="packages">
          <h1>Packages We Offer</h1>
          <p>Offering the best Hajj and Umrah option for every budget range</p>
          
      
      
      <div class="row">
         
          <div class ="packages-col">
              <h3>Luxury</h3>
              <p>Luxury package offers you the most elelgant and regal experience possible. The best 5 star hotel with the ultimate view of Ka'baa, being within 3 minutes walking distance from Al-haramain, the best food facilities, along with the best Hajj guide, this package will evoke the thoughts of Jannah in your mind while you seek the good will of your lord.</p>   
          </div>
          
              
          <div class ="packages-col">
              <h3>Regular</h3>
              <p>Begin your journey answering Ar-Rahman's call while we bring you ease with our regular package offering our 3 star hotel, 10 minutes walk from Al Haramain with healthy food servings thrice a day.</p>
          </div>  
          
          
          <div class ="packages-col">
              <h3>Umrah</h3>
              <p>Apply your Oud attar oil, drink the water of ZamZam well, and enjoy the sweetness of Ajwah as you seek Allah in a serene Mecca outside of Hajj season. Allow us to think about the rest. </p>
          </div>
          
      </div>
      
      
      
      </section>
      
      
      
      

  <!--------JavaScript for toggle menu----------->

<!--
  <script>
      
      var navlinks = document.getElementById("navLinks")
      function showMenu(){
          navLinks.style.right="0";
      }
      function hideMenu(){
          navLinks.style.right = "-200px";
      }
      
  </script>
  
  -->
  
  
  
  
  
  </body>

</html>