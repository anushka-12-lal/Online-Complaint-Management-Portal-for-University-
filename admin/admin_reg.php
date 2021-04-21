<?php
  
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Admin Registration</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  
</head>
<body>



<section>
  <div class="reg_img">
    <br>
    <br>

    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">REGISTER</h1>
       
     <form name="ADMIN Registration" action="" method="post">
        
        <div class="login">
          <input type="text" class="form-control" name="first" placeholder="First Name" required=""> <br>
          <input type="text" class="form-control" name="last" placeholder="Last Name" required=""> <br>
          <input type="text" class="form-control" name="username" placeholder="Username" required=""> <br>
          <input type="password" class="form-control" name="password" placeholder="Password" required=""> <br>
          <input type="text" class="form-control" name="dept" placeholder="Department" required=""> <br>
          <input type="text" class="form-control" name="email" placeholder="Email" required=""><br>
           <div class="center">
          <button type="submit" class="btn btn-primary" name="submit" value= "Sign Up">Sign Up</button></div></div>
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