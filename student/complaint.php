<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <style type="text/css">
    	body
    	{
    		background-image: url("keyboard.jpg");
    	}
    	.wrapper
    	{
    		padding: 10px;
    		margin: -20px auto;
    		width:900px;
    		height: 600px;
    		background-color: black;
    		opacity: .8;
    		
    	}
    	.form-control
    	{
    		height: 70px;
    		width: 60%;
    	}
    	.scroll
    	{
    		width: 100%;
    		height: 300px;
    		overflow: auto;
    	}
    	.select
    	{
    		width:90%;
    		border:1px solid blue;
    		padding: 10px 15px 10px 15px;

    	}

    </style>
</head>
<body>

	    <div class="wrapper">
	    	<br><br><br>
		<h4><p style="color:white">If you have any suggesions or questions please comment below.</p></h4>
		<form style="" action="" method="post">
			<form action="/action_page.php">
                 <label for="depts"><h4><p style="color:yellow">Choose Department for your complaint:</p></h4></label>
                 <select id="depts" name="depts" required="">
                 	<option value="">--Select--</option>
                  <option value="university">University</option>
                   <option value="canteen">Canteen</option>
                   <option value="hostel">Hostel</option>
             </select><br>
             <label for="type"><h4><p style="color:yellow">Choose Type of your complaint:</p></h4></label>
                 <select id="type" name="type" required="">
                  <option value="">--Select--</option>
                  <option value="urgent">URGENT</option>
                   <option value="general">GENERAL</option>
                  
             </select><br><br>
             <textarea name="message" rows="10" cols="80" placeholder="Write something..." required=""></textarea><br>	
			<input class="btn btn-default" type="submit" name="submit" value="Submit" style="width: 90px; height: 35px;">		
		</form></form>
	
<br><br>
       
      


   <?php

         if(isset($_POST['submit']))
         {
           
            $sql="INSERT INTO `complaint`(`Username`,`Department`, `Type`, `Complaint`, `idate`, `Status`) VALUES ('$_SESSION[login_user]','$_POST[depts]','$_POST[type]','$_POST[message]',NOW(),'Waiting');";
            $res=mysqli_query($db,$sql);

            
      ?>
           <script type ="text/javascript">
              alert("Successfully REgistered");
           </script>
     
     <?php

    }
    ?>
	
	</div>
</body>
</html>