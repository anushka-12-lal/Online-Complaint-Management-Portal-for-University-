<?php
  
  include "connection.php";
 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
</head>
     <header>
      
      <nav >
      <div >
          <?php
            if(isset($_SESSION['login_user']))
            {?>

                <ul >
                  <li>
                    <div style="color: white">
                      <?php
                        echo "Welcome-".$_SESSION['login_user']; 
                      ?>
                    </div>
                  </a></li>
                  <li><a href="student_profile.php">PROFILE</a></li>
                  <li><a href="index.php">HOME</a></li>
                  <li><a href="books.php">FILE_COMPLAINT</a></li>
                  <li><a href="logout.php">LOGOUT</a></li>
                </ul>
              <?php
            }
            else
            {   

              ?>
              <ul>

                <li><a href="index.php">HOME</a></li>                            
                <li><a href="student_login.php">STUDENT_LOGIN</a></li>
                <li><a href="registration.php">SIGNUP</a></li>
              </ul>
                
                <?php
            }
          ?>

          

      </div>
    </nav>
  </header>
<body>


<section>
  <div class="log_img">
    <br> 
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">STUDENT LOGIN</h1><br>
      <form name="login" action="" method="post">
        <br><br>
        <div class="login">
          <input type="text" name="username" placeholder="Username" required=""> <br><br>
          <input type="password" name="password" placeholder="Password" required=""> <br><br>
          <button type="submit" name="submit">Login</button></div>
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