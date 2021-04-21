	<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Complaints</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">

    .srch
    {
      position: absolute;
      

    }
    
    body {
      background-color: #491C85 ;
      background-repeat: no-repeat;
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}


.container
{
  width:800px;
  margin-top: 40px;
  height: 300px;
  background-color: black;
  opacity: .8;
  color: white;
  align-content: center;
}

.option
{
  color:black;
}



  </style>

</head>
<body>

  <br><br>
  <div class="container">
    <br><h3 style="color:orange;text-align: center;">Manage Complaints</h3>

    <div class="srch">
    <br>
    <form style="" action="" method="post">
      <form action="/action_page.php">
    
      <input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
      <input type="text" name="cid" class="form-control" placeholder="CID" required=""><br>
      <div class ="option">
                 <label for="Approve"><h4><p style="color:yellow">Choose Action for this complaint:</p></h4></label>
                 <select id="Approve" name="Approve" required="">
                  <option value="">--Select--</option>
                  <option value="Approve">Approve</option>
                   <option value="Reject">Reject</option>
                   
             </select><br></div>
             
      
      <button class="btn btn-default" name="submit" type="submit">Submit</button><br><br><br>
    </form>
    </form>

  

  </div>
</div>
    
    

<?php
  if(isset($_POST['submit']))
  {
    $res = mysqli_query($db,"UPDATE  `complaint` SET  `Status` = '$_POST[Approve]', `rdate` =  NOW() WHERE Username= '$_POST[username]' and CID = '$_POST[cid]';");

    

    ?>
      <script type="text/javascript">
        alert("Updated successfully.");
        
      </script>
    <?php
  }
?>
</body>
</html>