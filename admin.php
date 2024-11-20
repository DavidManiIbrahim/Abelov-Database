<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <!-- <link rel="stylesheet" href="./admin.css"> -->
 <style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }

 

  .login-container {
    display: flex;
    max-width: 100%;
    width: 100%;
    height: 100vh;
    background-color: #d8b4f1;
    border-radius: 8px;
    overflow: hidden;
  }

  /* Left side - Form */
  .login-form {
    width: 50%;
    /* border: 1px solid ; */
    padding: 40px;
    background-color: #e3c6f6;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .login-form h2 {
    color: #000;
    font-weight: bold;
    font-size: 24px;
    margin-bottom: 20px;
  }

  .login-form label {
    color: #000;
    font-weight: bold;
    font-size: 20px;
    margin-bottom: 10px;
    display: block;
  }

  .input-field {
    width: 100%;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px dashed #8d3cb4;
    outline: none;
    font-size: 16px;
  }



  .login-button {
    width: 100%;
    margin-top: 20px;
    padding: 15px;
    text-transform: uppercase;
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    background-color: #a34dcd;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .login-button:hover {
    background-color: #8d3cb4;
  }

  /* Right side - Image */
  .login-image {
    width: 50%;
    background-color: #fff;
    /* background-color: #f0e6fa; */
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .login-image img {
    width: 80%;
    height: auto;
  }

  .success{
    position: absolute;
    top: 58%;
    padding: 5px;
    left: 3%;
    text-align: center;
    /* color: #fff; */
    /* border: 1px solid; */
    color: rgb(10, 204, 52);
   
  }

  .error{
    color: red;
    position: absolute;
    top: 58%;
    padding: 5px;
    left: 3%;
    text-align: center;
    /* color: #fff; */
    /* border: 1px solid; */
  }
 </style>
</head>
<body>
  <div class="login-container">
    <!-- Left side - Form -->
    <div class="login-form">
        <form action="admin.php" method="post">

            <h2>Admin ID</h2>
            <!-- <label for="userId">User ID</label> -->
            <input type="text" name="user" class="input-field" placeholder="User ID"> <br>
            
            <!-- <label for="password">Password</label> -->
            <input type="password"  name="password" class="input-field" placeholder="Input Password"> <br>
            
            <button type="submit"  class="login-button">SignUp</button>
        </form>
    </div>
    
    <!-- Right side - Image -->
    <div class="login-image">
      <img src="./src/assets/amico.png" alt="Admin Login Illustration">
    </div>
  </div>
</body>
</html>


<?php

// include('admin.html');

include('config.php');

// if(isset($_POST['signup'])){
$username = $_POST['user'];
$password = $_POST['password'];
// echo $username."<br>";
// echo $password;

$user_id = "abel";
$pwd = "victor";

    if (($username === $user_id) && ($password && $pwd ) ){
        echo "<span class='success'>Login Successful</span>";
       header("location: dashboard.php");
    }else{
        echo "<span class='error'>Invalid user id and password </span>";
    }
    


