<?php 
session_start();

//connection with db

$db = mysqli_connect("localhost", "root", "", "FacultySIET");

if (isset($_POST['getvalue'])) {

   $Name = mysql_real_escape_string($_POST['Name']);
   $UserId = mysql_real_escape_string($_POST['UserId']);
   $Role = mysql_real_escape_string($_POST['Role']);
   $DOB = mysql_real_escape_string($_POST['DOB']);
   $Department = mysql_real_escape_string($_POST['Department']);
   $Email = mysql_real_escape_string($_POST['Email']);
   $Password = mysql_real_escape_string($_POST['Password']);
   $ConfirmPassword = mysql_real_escape_string($_POST['ConfirmPassword']);

    if($Password == $ConfirmPassword){
      //Create User

      $Password = md5($Password);
      $ConfirmPassword = md5($ConfirmPassword);  //hash before storing
      $sql = "INSERT INTO signup(Name, UserId, Role, DOB, Department, Email, Password,ConfirmPassword) VALUES ('$Name', '$UserId', '$Role', '$DOB', '$Department', '$Email', '$Password','$ConfirmPassword')";
      mysqli_query($db,$sql);
      $_SESSION['message'] = "You are now signned in";
        $_SESSION['Name'] = $Name;
        header("location: index.php");
      }
      else{
        $_SESSION['message'] = "The password doesn't match";
      }
    }


?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Faculty login</title>
  
      <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
      <link rel="stylesheet" href="css/style.css">
<script>
       var x = document.getElementById("textfocus").autofocus;
   </script>
  
</head>

<body>

  <div class="container">
  <img class="header" src="images/header.jpg">
  <div class="login">

  	<h1 class="login-heading">
      <strong>Welcome.</strong> Please sign up.</h1>
      <form name="form" method="post" action="signup.php">
        <input type="text" name="Name" placeholder="Name" required="required" class="input-txt" id="textfocus" />
      <input type="text" name="UserId" placeholder="UserId" required="required" class="input-txt" />
       <select id="role" class="input-txt" name="Role">
                  <option value="" disabled selected hidden>Role</option>
                  <option value="c">Chairman</option>
                  <option value="p">Principal</option>
                  <option value="h">HOD</option>
                  <option value="s">Assitant Professor</option>
                </select>
       <input type="date" name="DOB" class="input-txt" required="required" />
       <select id="dept" class="input-txt" name="Department">
                  <option value="" disabled selected hidden>Department</option>
                  <option value="cse">CSE</option>
                  <option value="it">IT</option>
                  <option value="eee">EEE</option>
                  <option value="ece">ECE</option>
                  <option value="mech">MECH</option>
                  <option value="agri">AGRI</option>
                  <option value="civil">CIVIL</option>
                  <option value="biotech">BIO-TECH</option>
                    <option value="bio-medical">BIO-MEDICAL</option>
                  <option value="foodtech">FOOD-TECH</option>
                    <option value="automobile">AUTO-MOBILE</option>
                </select>
    
        <input type="email" name="Email" placeholder="Email" required="required" class="input-txt" />
          <input type="password" name="Password" placeholder="Password" required="required" class="input-txt" />
          <input type="password" name="ConfirmPassword" placeholder="Confirm Password" required="required" class="input-txt" />
          <div class="login-footer">
             
            <button type="submit" class="btn btn--right" name="getvalue">Sign up  </button>
            
    
          </div>
      </form>
  </div>
</div>
  
    </body>
</html>
