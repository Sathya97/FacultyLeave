$sql = "SELECT * FROM signup WHERE UserId='$UserId' AND Password='$Password' ";
    $Result= mysqli_query($db, $sql);

     $role = "SELECT Role FROM signup WHERE UserId='$UserId'";
     $Result1=mysqli_query($db,$role);

    if (mysqli_num_rows($Result) == 1) {
      if(mysqli_num_rows($Result1) == 1)
      {

    
if (isset($role)=='s' ){


     echo "Welcome Faculty";
         $_SESSION['Role'] = $Roles;
         header("location: faculty.php");
        
    }
     }    
     
   }

       //hod
      if(isset($role)=='h') {
      
    
    $sql = "SELECT * FROM signup WHERE UserId='$UserId' AND Password='$Password' ";
    $Result= mysqli_query($db, $sql);
         $role = "SELECT Role FROM signup WHERE UserId='$UserId'";
     $Result1=mysqli_query($db,$role);
    if (mysqli_num_rows($Result) == 1) {
      if(mysqli_num_rows($Result1) == 1)
      {

    

     echo "Welcome HOD";
         $_SESSION['Role'] = $Roleh;
         header("location: hod.php");
       } 
         
     } }

       //principal
     if(isset($role)=='p') {
      
    
    $sql = "SELECT * FROM signup WHERE UserId='$UserId' AND Password='$Password'  ";
    $Result= mysqli_query($db, $sql);
         $role = "SELECT Role FROM signup WHERE UserId='$UserId'";
     $Result1=mysqli_query($db,$role);

    if (mysqli_num_rows($Result) == 1) {

    if(mysqli_num_rows($Result1) == 1)
      {

     echo "Welcome principal";
         $_SESSION['Role'] = $Rolep;
         header("location: principal.php");
        
         
     } }
           }

    

    
      }








       <?php/*
  $db= mysqli_connect("localhost","root","","FacultySIET");
  //mysqli_select_db($link,"FacultySIET");

  
      $sql = "SELECT Name FROM signup WHERE Department='cse' AND Role='s'" ;
     $result = mysqli_query($db,$sql);
     echo "<table>";
     echo "<tr>";
     echo "<th>"; echo "name"; echo "</th>";
     //echo"<select class='input-txt' name='Name'";
    // echo"<option value='' disabled selected hidden>Alternate staff</option>";
     
     while($row=mysqli_fetch_array($result)) {
      //echo "<option value='".$row['Name']."'>".$row['Name']."</option>";
      echo "<tr>";
      echo $row['Name'];
      echo"</tr>";
       
     }
     
     //echo "</select>";
     
     echo "</table>";
   
*/
?>