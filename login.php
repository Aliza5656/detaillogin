<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
    <title>SIGNIN</title>
    
  </head>

<?php
include 'php/connection.php';
include 'php/logininfo.php';
?>
 
  <body> 

<div class="container-fluid bg-dark d-flex justify-content-center align-items-center " style="height: 100vh; width: 100%;">
    <div class="box bg-danger d-flex justify-content-center align-items-center  flex-column " style = "border-radius: 20px; padding: 20px; width: 500px; height: 300px;">
        <h1>LOG IN</h1>
       <form  method="post">
        <input type="text" class="form-control" name="email" placeholder="Enter your email">
        <input type="text" class="form-control" name="password" placeholder="Enter your password">
        

       
           <div class=" text-center mt-3">
         
            <button type="submit" name="Rbtnregister" class="btn">lOG IN</button>
            </div>
          <div class="form-link">
            Do  have an account? <a href="sigup.php">SIGNIN  </a>
          </div>
   
</form>
</div>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>