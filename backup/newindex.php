<?php
session_start();

//connect to db
$db = mysqli_connect("localhost", "root", "", "FacultySIET");
 
 if (isset($_POST['getvalue'])) {

 /* $errors = array();

if(empty($_POST['UserId'])){
$errors [] = 'Please enter username!';
}else{
$us = trim($_POST['UserId']);
}

if(empty($_POST['Password'])) {
$errors [] = 'Please enter the password!';
}else{
$p = trim($_POST['Password']);
}
    if(empty($errors))
    {*/
    $Email= mysql_real_escape_string($_POST['Email']);
    
    $Password = mysql_real_escape_string($_POST['Password']);
    //$Role = mysql_real_escape_string($_POST['Role']);
    
   
    $Password = md5($Password); //remember we hashed password before storing
    //staff
    
      
    
    $sql = "SELECT * FROM signup WHERE Email='$Email' AND Password='$Password' ";
    $Result= mysqli_query($db, $sql);

     $role = "SELECT Role FROM signup WHERE Email='$Email'";
     $Result1=mysqli_query($db,$role);

    if (mysqli_num_rows($Result) == 1) {
      if(mysqli_num_rows($Result1) == 1)
      {

    
switch(isset($_POST[$role] )){

    case "s":
     echo "Welcome Faculty";
         $_SESSION['Role'] = $Role;
         header("location: faculty.php");
         break;
    case "h":
    echo "Welcome HOD";
         $_SESSION['Role'] = $Role;
         header("location: hod.php"); 
         break;   
    case "p":
    echo "Welcome principal";
         $_SESSION['Role'] = $Role;
         header("location: principal.php");
         break;
  }
}
}
}
   /* $sql = "SELECT * FROM signup WHERE Email='$Email' AND Password='$Password' ";
    $Result= mysqli_query($db, $sql);

     $role = "SELECT Role FROM signup WHERE Email='$Email'";
     $Result1=mysqli_query($db,$role);

    if (mysqli_num_rows($Result) == 1) {
      if(mysqli_num_rows($Result1) == 1)
      {


   if(isset($role)=="h") {
       
     echo "Welcome HOD";
         $_SESSION['Role'] = $Roleh;
         header("location: hod.php");
       }  
     }
   }

       $sql = "SELECT * FROM signup WHERE Email='$Email' AND Password='$Password' ";
    $Result= mysqli_query($db, $sql);

     $role = "SELECT Role FROM signup WHERE Email='$Email'";
     $Result1=mysqli_query($db,$role);

    if (mysqli_num_rows($Result) == 1) {
      if(mysqli_num_rows($Result1) == 1)
      {

        if(isset($role)=="p") {
          echo "Welcome principal";
         $_SESSION['Role'] = $Rolep;
         header("location: principal.php");
        
         
     }
   }
     
   }

 }

      /* //hod
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
    */
   
      
    

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
      <form method="post" name="form" action="newindex.php">
        <input type="email" name="Email" placeholder="Email" required="required" class="input-txt" />
          <input type="password" name="Password" placeholder="Password" required="required" class="input-txt" />
          
          <div class="login-footer">
             <a href="forgotpwd.php" class="lnk">
              <span class="icon icon--min">ಠ╭╮ಠ</span> 
              I've forgotten password
            </a>
            <button type="submit" class="btn btn--right" name="getvalue">Sign in  </button>
            <a href="signup.php"><button type="button" class="btn btn--left">Sign up  </button></a>
    
          </div>
      </form>
  </div>
</div>
  
    </body>
</html>




