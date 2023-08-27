<?php
  session_start();
?>

<html>
    

<head>
    
    <link rel="stylesheet" href="clients.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Clients</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    
    
</head>
   
<section class="header">
   
   
   
   
       
  <div class="container">
   
    <div class="description">
      
       <h1>Registered Clients</h1>
       
       
       
       
    </div>

    <hr>    
    
     <body class="body">
        
         
        
        <h3> List of Clients who are registered in the portal </h3>
        <br>
        <table class="table">
           <thead>
               <tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th>Sex</th>
                 <th>DOB</th>
                 <th>NID</th>
                 <th>Package</th>
                 <th>Approval</th>
                 <th>Guide ID</th>
                 <th>Action</th>
                 <th>Set Guide ID</th>
                 
                 
               </tr>
               
               
           </thead>
           
           <tbody>
              <?php
               
               $serverName = 'localhost';
               $dBUsername = 'root';
               $dBPassword = '';
               $dBName = 'trying';



               $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

               if(!$conn){
    
                   die("Connection failed: " . mysqli_connect_error());

               }
               
               $sql = "Select userID, name, gender, DOB, NID, package, approved, guideID from users";
               $result=  $conn->query($sql);
               if(!$result){
                   die("Invalid Query: " . $connection->error);
               }
               
               while($row=$result->fetch_assoc()){
                   
                echo "<tr>
                   <td>" . $row["userID"] . "</td>
                   <td>" . $row["name"] . "</td>
                   <td>" . $row["gender"] . "</td>
                   <td>" . $row["DOB"] . "</td>
                   <td>" . $row["userID"] . "</td>
                   <td>" . $row["NID"] . "</td>
                   <td>" . $row["approved"] . "</td>
                   <td>" . $row["guideID"] . "</td>
                   <td>a</td>
                   <td>b</td>
           
                   
               </tr>";
                   
               }
               
               ?>
               
           </tbody>
         
        </table>
 
 
     </body>
    
  </div>
    
    
    
</section>
 


 


</html>