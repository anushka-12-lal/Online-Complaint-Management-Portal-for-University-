<?php
  
  include "connection.php";
  
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  
</head>
<body>


<section>
  <div class="log_img">
    <br> 
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">STUDENT LOGIN</h1><br>
      <form name="login" action="" method="post">
        <br>
        <div class="login">
          <input type="text" class="form-control" name="username" placeholder="Username" required=""> <br>
          <input type="password" class="form-control"  name="password" placeholder="Password" required=""> <br><br>
          <div class="center">
          <button type="submit" class="btn btn-primary" name="submit">Login</button></div></div>
      </form>
      <p style="color: white; padding-left: 15px;">
        <br><br>
        
        New to this website?&nbsp <a style="color: white;" href="registration.php">Sign Up</a>
      </p>

         </div>

  </div>
</section>

<?php

   if(isset($_POST['submit']))
   {
       $count=0;
       $res=mysqli_query($db,"SELECT * FROM `STUDENT` WHERE Username='$_POST[username]' && Password='$_POST[password]';");
      $count=mysqli_num_rows($res);

      if($count==0)
      {
      ?>
         <script type="text/javascript">
        alert("The username or password is invalid");
          </script>
      <?php

       }
      else
      {
         $_SESSION['login_user']=$_POST['username'];
         ?>
           <script type="text/javascript">
           window.location="index.php"
         </script>
    
         <?php
        }
   }

?>


</body>
</html>