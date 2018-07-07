<?php
 $db = mysqli_connect("localhost","root","","FacultySIET");

if (isset($_POST['getvalue'])) {

   $email = mysql_real_escape_string($_POST['email']);
   $designation = mysql_real_escape_string($_POST['designation']);
   
   $department = mysql_real_escape_string($_POST['department']);
   $reason_type= mysql_real_escape_string($_POST['reason_type']);
   $no_of_days = mysql_real_escape_string($_POST['no_of_days']);
   $reason = mysql_real_escape_string($_POST['reason']);
    
   
     
   $sql = "INSERT INTO new_application(email,designation,department,reason_type,no_of_days,reason) VALUES ('$email','$designation','$department','$reason_type','$no_of_days','$reason')";
   mysqli_query($db,$sql);
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
      <strong>Welcome.</strong> Please fill the form.</h1>
      <form name="newform" method="post" action="">
        <input type="email" name="email" placeholder="Email" required="required" class="input-txt" id="textfocus" autofocus/>

      <input type="text" name="designation" placeholder="Designation" required="required" class="input-txt" />
       <input type="text" name="department" placeholder="Department" required="required" class="input-txt" />
       <select id="list" class="input-txt" name="reason_type">
                  <option value=""  name="reason_type"disabled selected hidden>Reason Type</option>
                  <option value="Casual leave" name="reason_type">Casual leave</option>
                  <option value="Medical leave" name="reason_type">Medical leave</option>
                  <option value="On duty" name="reason_type">On duty</option>
                  
                </select   >
       <input type="number" name="no_of_days" placeholder="Number of days" required="required" class="input-txt" />
        <input type="text" name="reason" placeholder="Reason" required="required" class="input-txt" />
       
          <div class="login-footer">
             
            <button type="submit" class="btn btn--right" name="getvalue">Transfer to HOD  </button>
            
    
          </div>
      </form>
  </div>
</div>
  
    </body>
</html>
