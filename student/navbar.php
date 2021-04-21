<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>
  </title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    
  
</head>
<body>
     <header>
      
      <nav>

                  
       <div class="container-fluid">
         
          <?php
            if(isset($_SESSION['login_user']))
            {?>


                <ul class="nav navbar-nav">

                  <li>
                    <div style="color: white">
                      <h2>
                      <?php
                        echo "WELCOME ".$_SESSION['login_user']." !"; 
                      ?>
                      </h2>
                    </div>
                  </li></ul>
                
                  
                   <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php"> <span class="glyphicon glyphicon-home" > HOME</a></li>
                  <li><a href="complaint.php"> FILE_COMPLAINT</a></li>
                  <li><a href="file_info.php"> VIEW_COMPLAINT</a></li>
                 
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</a></li>
                </ul>
              <?php
            }
            else
            {   

              ?>
              <ul class="nav navbar-nav navbar-right">

                <li><a href="index.php"><span class="glyphicon glyphicon-home" > HOME</a></li>                            
                <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in" > LOGIN</a></li>
                <li><a href="registration.php"><span class="glyphicon glyphicon-user" > SIGNUP</a></li>
              </ul>
                
                <?php
            }
          ?>

          

      </div>
    </nav>
  </header>

</body>
</html>

