<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
</head>
<body>
<header>
  
<div class="logo">
    <img src="logo.jpg">
      
    </div>

      <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          
          <li><a href="admin_login.php">ADMIN_LOGIN</a></li>
          <li><a href="student_login.php">STUDENT-LOGIN</a></li>
          
        </ul>
      </nav>
</header>
<section>
  <div class="log_img">
    <br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">ADMIN LOGIN</h1>
      <form name="login" action="" method="">
        <br>
        <div class="login">
          <input type="text" name="username" placeholder="Username" required=""> <br><br>
          <input type="password" name="password" placeholder="Password" required=""> <br><br>
          <button>Login</button></div>
      </form>
      <p style="color: white; padding-left: 15px;">
        <br><br>
        <a style="color:white;" href="">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        New to this website?&nbsp <a style="color: white;" href="admin_reg.php">Sign Up</a>
      </p>

         </div>

  </div>
</section>


</body>
</html>