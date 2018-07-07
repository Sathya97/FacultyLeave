<?php
session_start();

//connect to db
$db = mysqli_connect("localhost", "root", "", "FacultySIET");
 
 if (isset($_POST['getvalue'])) {
    
    $Email= mysql_real_escape_string($_POST['Email']);
    
    $Password = mysql_real_escape_string($_POST['Password']);
    $Role = mysql_real_escape_string($_POST['Role']);
    $roles = "s";
    $roleh = "h";
    $rolep = "p";
    //$_SESSION['UserId'] = $_POST['UserId'];
    //$_SESSION['Password'] = $_POST['Password'];
    $Password = md5($Password); //remember we hashed password before storing
    //staff
    if (isset($Role)==$roles) {
      
    
    $sql = "SELECT * FROM signup WHERE Email='$Email' AND Password='$Password' AND Role='$roles' ";
    $Result= mysqli_query($db, $sql);

    if (mysqli_num_rows($Result) == 1) {

    

    
         $_SESSION['Email'] = $Email;
         header("location: faculty.php");
         //$(".form")[0].reset();
        
         
     } 
     if (isset($_GET['logout'])) {

       # code...
      session_unregister('Email');
     }}

       //hod
      if(isset($Role)==$roleh) {
      
    
    $sql = "SELECT * FROM signup WHERE Email='$Email' AND Password='$Password' AND Role='$roleh' ";
    $Result= mysqli_query($db, $sql);

    if (mysqli_num_rows($Result) == 1) {

    

     echo "Welcome HOD";
         $_SESSION['Email'] = $Email;
         header("location: hod.php");
        
         
     } 
   if (isset($_GET['logout'])) {

       # code...
      session_unregister('UserId');
     }}

       //principal
     if(isset($Role)==$rolep) {
      
    
    $sql = "SELECT * FROM signup WHERE Email='$Email' AND Password='$Password' AND Role='$rolep' ";
    $Result= mysqli_query($db, $sql);

    if (mysqli_num_rows($Result) == 1) {

    

     echo "Welcome principal";
         $_SESSION['Email'] = $Email;
         header("location: principal.php");
        
         
     }
     if (isset($_GET['logout'])) {

       # code...
      session_unregister('Email');
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
        <input type="Email" name="Email" placeholder="Email" required="required" class="input-txt" />
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




