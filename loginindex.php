<?php
require('config.php');

if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    
    $duplicate = mysqli_query($conn, "SELECT * FROM data WHERE email = '$email'");
    
    if(mysqli_num_rows($duplicate) > 0){
        echo "<script> alert('Email Already Taken');</script>";
    } else {
        if($password == $confirmpassword){
            // Specify the columns in the INSERT INTO statement
            $query = "INSERT INTO data (name, email, password) VALUES ('$name', '$email', '$password')";
            mysqli_query($conn, $query);
            echo "<script> alert('Registration Successful');</script>";
            header("Location: signin.php");
        } else {
            echo "<script> alert('Passwords do not match');</script>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyle.css">
    
   
    
</head>
<body>

    <div class="container">
    <div class="regform">
       
        <form action="#" method="post">
            <p class="logo">Pet <b style="color: #06C167;">Sitter</b></p>
            
            <p id="heading">Create your account</p>
            
            <div class="input">
                <label class="textlabel" for="name">User name</label><br>
                
                <input type="text" id="name" name="name">
             </div>
             <div class="input">
                <label class="textlabel" for="email">Email</label>
                <input type="email" id="email" name="email">
             </div>
             <label class="textlabel" for="password">Password</label>
             <div class="password">
              
                <input type="password" name="password" id="password">
                <i class="bi bi-eye-slash" id="showpassword"></i> 
                
			
             </div>
             <label class="textlabel" for="password">Confirm Password</label>
             <div class="password">
              
                <input type="password" name="confirmpassword" id="password">
                <i class="bi bi-eye-slash" id="showpassword"></i> 
                
			
             </div>
    
             <div class="radio">
                
                <input type="radio" name="gender" id="male" value="male">
                <label for="male" >Male</label>
                <input type="radio" name="gender" id="female" value="female">
                <label for="female" >Female</label>

             </div>
             <div class="btn">
                <button type="submit" name="Submit">Continue</button>
             </div>
             <!-- <div class="btn1">
                <a href="">Forgot Password</button>
             </div> -->
             <!-- Inside the login.php file -->
                
   
            <div class="signin-up">
                 <p style="font-size: 20px; text-align: center;">Already have an account? <a href="signin.php"> Sign in</a></p>
             </div>
         

        </form>
        </div>
        
       
    </div>
       
</body>
</html>


