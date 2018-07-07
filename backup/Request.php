<?php

$db = mysqli_connect("localhost","root","","FacultySIET");
 if (isset($_POST['sendrequest'])) {

   //table alternate table
    $Email = mysql_real_escape_string($_POST['Email']);
    $period1= mysql_real_escape_string($_POST['period1']);
     //$Department= mysql_real_escape_string($_POST['Department']);
    $alternate_staff1= mysql_real_escape_string($_POST['alternate_staff1']);
    $period2 = mysql_real_escape_string($_POST['period2']);
    $alternate_staff2= mysql_real_escape_string($_POST['alternate_staff2']);
    $period3 = mysql_real_escape_string($_POST['period3']);
    $alternate_staff3= mysql_real_escape_string($_POST['alternate_staff3']);
    $period4 = mysql_real_escape_string($_POST['period4']);
    $alternate_staff4= mysql_real_escape_string($_POST['alternate_staff4']);
    $period5 = mysql_real_escape_string($_POST['period5']);
    $alternate_staff5= mysql_real_escape_string($_POST['alternate_staff5']);
    $period6= mysql_real_escape_string($_POST['period6']);
    $alternate_staff6= mysql_real_escape_string($_POST['alternate_staff6']);
    $comments = mysql_real_escape_string($_POST['comments']);    


$sql = "INSERT INTO substitute_request(Email,period1,alternate_staff1,period2,alternate_staff2,period3,alternate_staff3,period4,alternate_staff4,period5,alternate_staff5,period6,alternate_staff6,comments) VALUES ('$Email','$period1','$alternate_staff1','$period2','$alternate_staff2','$period3','$alternate_staff3','$period4','$alternate_staff4','$period5','$alternate_staff5','$period6','$alternate_staff6','$comments')";
   mysqli_query($db,$sql);
    
 echo "<script type='text/javascript'>alert('Your Request has been sent');</script>";

}

?>
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
  <form method="post">
  <div class="container">
  <img class="header" src="images/header.jpg"></br></br></br></br>
  
 <h2 class="input-txt"> Alternate...</h2>
 
      
        <table>
         <tr><input type="email" name="Email" placeholder="email" required="required" class="input-txt" id="textfocus" autofocus/></tr>
         <tr>
          
          <td><input type="text" name="period1" class="input-txt"placeholder="PeriodNumber"></td>
          <td><select id="dept" class="input-txt" name="Department">
                  <option value="" disabled selected hidden>Substitute Dept</option>
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
                </select></td><td>
          <input type="email" class='input-txt' name="alternate_staff1" placeholder="Email">
     </td>
     
          
          </tr>
          <tr>
          
          <td><input type="text" name="period2" class="input-txt"placeholder="PeriodNumber"></td>
          <td><select id="dept" class="input-txt" name="Department">
                  <option value="" disabled selected hidden>Substitute Dept</option>
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
                </select></td>
          <td> <input type="email" class='input-txt' name="alternate_staff2" placeholder="Email"></td>
                 
          </tr>
          <tr>
          
          <td><input type="text" name="period3" class="input-txt"placeholder="PeriodNumber"></td>
          <td><select id="dept" class="input-txt" name="Department">
                  <option value="" disabled selected hidden>Substitute Dept</option>
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
                </select></td>
          <td> <input type="email" class='input-txt' name="alternate_staff3" placeholder="Email"></td>
                 
          </tr>
          <tr>
          
          <td><input type="text" name="period4" class="input-txt"placeholder="PeriodNumber"></td>
          <td><select id="dept" class="input-txt" name="Department">
                  <option value="" disabled selected hidden>Substitute Dept</option>
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
                </select></td>
          <td> <input type="email" class='input-txt' name="alternate_staff4" placeholder="Email"></td>
                 
          </tr>
          <tr>
          
          <td><input type="text" name="period5" class="input-txt"placeholder="PeriodNumber"></td>
          <td><select id="dept" class="input-txt" name="Department">
                  <option value="" disabled selected hidden>Substitute Dept</option>
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
                </select></td>
          <td> <input type="email" class='input-txt' name="alternate_staff5" placeholder="Email"></td>
                 
          </tr>
          <tr>
          <td><input type="text" name="period6" class="input-txt"placeholder="PeriodNumber"></td>
          <td><select id="dept" class="input-txt" name="Department">
                  <option value="" disabled selected hidden>Substitute Dept</option>
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
                </select></td>
          <td> <input type="email" class='input-txt' name="alternate_staff6" placeholder="Email"></td>
                 <td> <input type="text" placeholder="Comments" name="comments" class="input-txt"></td>
          </tr>
          <tr>
           <td></td>
          <td><input type="submit" class="btn" value="Send_Request" name="sendrequest"></td>      

        </table>
      </div>
    </div>
  </div>
</form>

      </body>
      </html>
          