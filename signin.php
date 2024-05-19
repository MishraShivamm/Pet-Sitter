<?php
if (isset($_POST['submit'])) {
   header('Location: logout.html');
    exit(); // Make sure to exit after the script to prevent further execution
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Sitter</title>
    <link rel="stylesheet" href="loginstyle.css">
    <style>
      a.my-button{
         background-color: #060606;
         color: #fff;
         font-family: Arial, Helvetica, sans-serif;
         font-size: 25px;
         font-weight: 800;
         font-style: normal;
         text-decoration: none;
         padding: 14px 50px;
         border: 0px solid #000000;
         border-radius: 10px;
         display: inline-block;
      }
      a.my-button:hover{
         background-color: #515151;
      }
      a.my-button:active{
         transform: scale(0.95);
      }
    </style>
   </head>

<body>
   <div class="container">
    <div class="regform">
        
        <form action="#" method="post">
       
         <p class="logo">Pet <b style="color:#06C167; ">Sitter</b></p>
         <p id="heading" style="padding-left: 1px;"> Welcome  back ! <img src="" alt=""> </p>
         
         <div class="input">
            <input type="email" placeholder="Email address" name="email">
         </div>
         <div class="password">
            <input type="password" placeholder="Password" name="password" id="password">
         
          
            <i class="bi bi-eye-slash" id="showpassword"></i>
         </div>
         <p>Forgot your password? <a href="password.php">Recover it here</a>.</p>
         <div class="btn">
            <button type="submit" name="submit">Sign in</button>
            <!-- <a class="my-button" href="logout.html">Sign in</a> -->
            
         </div>
         <div class="signin-up">
            <p>Don't have an account? <a href="loginindex.php">Register</a></p>
         </div>
        </form>
      </div>
      

   </div>
   <script src="signin.js"></script>
</body>
</html>