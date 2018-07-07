


<html>
<head>
  <meta charset="UTF-8">
  <title>form</title>
  
      <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<form method="post">
  <div class="container">
  <img class="header" src="images/header.jpg"></br></br></br></br>
  <div class="box">
  	

  <div class="login">


  	
     <h1>
      

    <input type="submit" value="Check Leave Requests" class="btn" id="btn-color" name="getvalue" ></h1></strong>
      
    
          </div>
      
  </div>
</div>
</div>
</form>


  
    </body>
</html>

<?php
  $db= mysqli_connect("localhost","root","","FacultySIET");
  //mysqli_select_db($link,"FacultySIET");

  if(isset($_POST['getvalue']))
  {
      $sql = "SELECT * FROM new_application";
     $result = mysqli_query($db,$sql);
     echo "<center>";
     echo "<table border='1px'>";
     echo "<tr>";

     echo "<a href='new.php'>";echo "<th>"; echo "name"; echo "</th>"; echo "</a>";
     echo "</tr>";
     while($row=mysqli_fetch_array($result)) {
      echo "<tr>";
       echo "<a href='new.php'>"; echo "<td>"; echo $row['name']; echo "</td>"; echo"</a>";
       echo "</tr>";
     }
     echo "</table>";
     echo "</center>";
   }

?>