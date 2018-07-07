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
      

    <input type="submit" value="Click me" class="btn" id="btn-color" name="getvalue" ></h1></strong>
      
    
          </div>
      
  </div>
</div>
</div>
</form>


  
    </body>
</html>

<?php

session_start();
  $db= mysqli_connect("localhost","root","","FacultySIET");
  //mysqli_select_db($link,"FacultySIET");


   $Email=$_SESSION['Email'];
  if(isset($_POST['getvalue']))
  {
    
      $sql = "SELECT * FROM substitute WHERE alternate_staff='$Email'";
     $result = mysqli_query($db,$sql);
     echo "<center>";
     echo "<table border='1px' class='tableback'> ";
     echo "<tr>";

     echo "<th>"; echo "Email"; echo "</th>"; 
     echo "<th>"; echo "Department"; echo "</th>"; 
     echo "<th>"; echo "Date"; echo "</th>";
     echo "<th>"; echo "Class"; echo "</th>";
     echo "<th>"; echo "Period"; echo "</th>"; 
      echo "<th>"; echo "Comments"; echo "</th>"; 
       echo "<th>"; echo "Selection"; echo "</th>";
     echo "</tr>";
     while($row=mysqli_fetch_array($result)) {
      echo "<tr>";

        echo "<td>"; echo $row['Email']; echo "</td>";
        echo "<td>"; echo $row['Department']; echo "</td>";

        echo "<td>"; echo $row['Datee']; echo "</td>";
        echo "<td>"; echo $row['Class']; echo "</td>";
        echo "<td>"; echo $row['Period']; echo "</td>";
        echo "<td>"; echo $row['Comments']; echo "</td>";
        echo "<td> "; echo "<input type='submit' class='btn'  id='btn-color' value='Accept' name='Accept'>"; echo "</td>";
        echo "<td> "; echo "<input type='submit' class='btn'  id='btn-color' value='Decline'>"; echo "</td>";
       echo "</tr>";
     }
     echo "</table>";
     echo "</center>";
   }
   if(isset($_POST['Accept']))
  {
    $query = "UPDATE new_application
SET status = 'Accepted'
WHERE email = '$Email'";
 mysqli_query($db,$query);

}
?>