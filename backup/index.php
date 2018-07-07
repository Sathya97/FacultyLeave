<?php
session_start();

//connect to db
$db = mysqli_connect("localhost", "root", "", "FacultySIET");
 
 if (isset($_POST['getvalue'])) {
    
    $UserId= mysql_real_escape_string($_POST['UserId']);
    
    $Password = mysql_real_escape_string($_POST['Password']);
    $Role = mysql_real_escape_string($_POST['Role']);
    $roles = "s";
    $roleh = "h";
    $rolep = "p";
   
    $Password = md5($Password); //remember we hashed password before storing
    //staff
    if (isset($Role)==$roles) {
      
    
    $sql = "SELECT * FROM signup WHERE UserId='$UserId' AND Password='$Password' AND Role='$roles' ";
    $Result= mysqli_query($db, $sql);

    if (mysqli_num_rows($Result) == 1) {

    

     echo "Welcome Faculty";
         $_SESSION['Role'] = $Roles;
         header("location: faculty.php");
        
         
     } }

       //hod
      if(isset($Role)==$roleh) {
      
    
    $sql = "SELECT * FROM signup WHERE UserId='$UserId' AND Password='$Password' AND Role='$roleh' ";
    $Result= mysqli_query($db, $sql);

    if (mysqli_num_rows($Result) == 1) {

    

     echo "Welcome HOD";
         $_SESSION['Role'] = $Roleh;
         header("location: hod.php");
        
         
     } }

       //principal
     if(isset($Role)==$rolep) {
      
    
    $sql = "SELECT * FROM signup WHERE UserId='$UserId' AND Password='$Password' AND Role='$rolep' ";
    $Result= mysqli_query($db, $sql);

    if (mysqli_num_rows($Result) == 1) {

    

     echo "Welcome principal";
         $_SESSION['Role'] = $Rolep;
         header("location: principal.php");
        
         
     } }


    

    
      }
    
   
      
    

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Faculty login</title>
  
      <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="container">
  <img class="header" src="images/header.jpg">
  <div class="login">

  	<h1 class="login-heading">
      <strong>Welcome.</strong> Please login.</h1>
      <form method="post" name="form" action="index.php">
        <input type="text" name="UserId" placeholder="UserId" required="required" class="input-txt" />
          <input type="password" name="Password" placeholder="Password" required="required" class="input-txt" />
          
          <div class="login-footer">
             <a href="#" class="lnk">
              <span class="icon icon--min">ಠ╭╮ಠ</span> 
              I've forgotten something
            </a>
            <button type="submit" class="btn btn--right" name="getvalue">Sign in  </button>
            <a href="signup.php"><button type="button" class="btn btn--left">Sign up  </button></a>
    
          </div>
      </form>
  </div>
</div>
  
    </body>
</html>




