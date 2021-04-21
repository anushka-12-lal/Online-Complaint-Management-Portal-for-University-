<?php
  
  include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Admin Registration</title>
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
          <li><a href="admin_login.php">ADMIN-LOGIN</a></li>
          <li><a href="student_login.php">STUDENT-LOGIN</a></li>
        </ul>
      </nav>
</header>


<section>
  <div class="reg_img">
    <br>
    <br>

    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">REGISTER</h1>
       
     <form name="ADMIN Registration" action="" method="post">
        
        <div class="login">
          <input type="text" name="first" placeholder="First Name" required=""> <br><br>
          <input type="text" name="last" placeholder="Last Name" required=""> <br><br>
          <input type="text" name="username" placeholder="Username" required=""> <br><br>
          <input type="password" name="password" placeholder="Password" required=""> <br><br>
          <input type="password" name="dept" placeholder="Department" required=""> <br><br>
          <input type="text" name="email" placeholder="Email" required=""><br><br>

          <button type="submit" name="submit" value= "Sign Up">Sign Up</button></div>
      </form>
     
    </div>
  </div>
</section>

     <?php

         if(isset($_POST['submit']))
         {
            $count=0;
            $sql="SELECT username from ADMIN ";
            $res=mysqli_query($db,$sql);

            while($row=mysqli_fetch_assoc($res))
            {
              if($row['username']==$_POST['username'])
              {
                 $count=$count+1;
              }
             
            }
            if($count==0)
            {

               mysqli_query($db,"INSERT into `ADMIN` values (
              '$_POST[first]','$_POST[last]','$_POST[username]','$_POST[password]','$_POST[dept]','$_POST[email]');");
      ?>
           <script type ="text/javascript">
              alert("Successfully REgistered");
           </script>
      <?php    

            }
     
     else
     {
          ?>
           <script type ="text/javascript">
              alert("Username already exists");          
            </script>
         
     <?php

    }
     }



      ?>


</body>
</html>