
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

  
    
  body {
      background-color: #491C85 ;
      background-repeat: no-repeat;
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}


.container
{
  height: 600px;
  background-color: black;
  opacity: .8;
  color: white;
}

.srch1
    {
      position: left;
      padding-right: 850px;
      color:black;

    }

  </style>

</head>
<body>

  <br>

<div class="container">
  <h2 style="text-align: center;">Filed Complaints</h2>

  <div class="srch1">
    
  <form class="navbar-form" method="post" name="form1">
    
      <input type="text" name="search" placeholder="Department" required="">
      <button style= "background-color: #d1d7e0;" type="submit" name="submit"> SEARCH   
      </button>
   
  </form>
  </div>

  

  <?php
  
  if(isset($_SESSION['login_user']))
  {
    if(isset($_POST['submit']))
    {
      $q="SELECT * FROM `complaint` INNER JOIN `student` ON student.username = complaint.username WHERE Department like '%$_POST[search]%'ORDER BY complaint.Type DESC";
      $res= mysqli_query($db,$q);
    

       if(mysqli_num_rows($res)==0)
       {
          echo "Sorry! No complaints found for that department.";
       }

        else
       {
         echo "<table class='table table-bordered' >";
         echo "<tr style='background-color: #6db6b9e6;'>";
        //Table header
        
        
        echo "<th>"; echo "CID";  echo "</th>";
        echo "<th>"; echo "Type";  echo "</th>";
        echo "<th>"; echo "Department";  echo "</th>";
        echo "<th>"; echo "Complaint";  echo "</th>";
        echo "<th>"; echo "Issue_date";  echo "</th>";
        echo "<th>"; echo "Status";  echo "</th>";
        echo "<th>"; echo "Resolved_date";  echo "</th>";
        
        
      echo "</tr>"; 

      while($row=mysqli_fetch_assoc($res))
      {
        echo "<tr>";
        echo "<td>"; echo $row['CID']; echo "</td>";
        echo "<td>"; echo $row['Type']; echo "</td>";
        echo "<td>"; echo $row['Department']; echo "</td>";
        echo "<td>"; echo $row['Complaint']; echo "</td>";
         echo "<td>"; echo $row['idate']; echo "</td>";
       echo "<td>"; echo $row['Status']; echo "</td>";
       echo "<td>"; echo $row['rdate']; echo "</td>";

        
        
        echo "</tr>";
      }
       echo "</table>";

      }
    }
    else
    {
          $sql= "SELECT * FROM `complaint` INNER JOIN student ON student.username=complaint.Username ORDER BY complaint.Type DESC";;
          $res= mysqli_query($db,$sql);

        if(mysqli_num_rows($res)==0)
       {
        echo "<h3><b>";
        echo "There's no pending request.";
        echo "</h3></b>";
       }
     else
     {
      echo "<table class='table table-bordered' >";
      echo "<tr style='background-color: #6db6b9e6;'>";
        //Table header
        
       echo "<th>"; echo "CID";  echo "</th>";
        echo "<th>"; echo "Type";  echo "</th>";
        echo "<th>"; echo "Department";  echo "</th>";
        echo "<th>"; echo "Complaint";  echo "</th>";
        echo "<th>"; echo "Issue_date";  echo "</th>";
        echo "<th>"; echo "Status";  echo "</th>";
        echo "<th>"; echo "Resolved_date";  echo "</th>";
        
        
        
      echo "</tr>"; 

      while($row=mysqli_fetch_assoc($res))
      {
         echo "<tr>";
        echo "<td>"; echo $row['CID']; echo "</td>";
        echo "<td>"; echo $row['Type']; echo "</td>";
        echo "<td>"; echo $row['Department']; echo "</td>";
        echo "<td>"; echo $row['Complaint']; echo "</td>";
         echo "<td>"; echo $row['idate']; echo "</td>";
       echo "<td>"; echo $row['Status']; echo "</td>";
       echo "<td>"; echo $row['rdate']; echo "</td>";
            
        
        echo "</tr>";
      }
     echo "</table>";
    }
  }
}

?>
  
</div>
</body>
</html>