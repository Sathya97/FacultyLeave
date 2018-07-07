<?php
session_start();
$db = mysqli_connect("localhost","root","","FacultySIET");
$Email=$_SESSION['Email'];
 if (isset($_POST['onsubmit'])) {

   //table alternate table
  try {
    
  
    //$Email = mysql_real_escape_string($_POST['Email']);
    $Period= mysql_real_escape_string($_POST['Period']);
     $Department= mysql_real_escape_string($_POST['select1']);
    $Alternate_staff= mysql_real_escape_string($_POST['Alternate_staff']);
    $Datee = mysql_real_escape_string($_POST['Datee']);
    $Class = mysql_real_escape_string($_POST['Class']);
    /*$alternate_staff2= mysql_real_escape_string($_POST['alternate_staff2']);
    $period3 = mysql_real_escape_string($_POST['period3']);
    $alternate_staff3= mysql_real_escape_string($_POST['alternate_staff3']);
    $period4 = mysql_real_escape_string($_POST['period4']);
    $alternate_staff4= mysql_real_escape_string($_POST['alternate_staff4']);
    $period5 = mysql_real_escape_string($_POST['period5']);
    $alternate_staff5= mysql_real_escape_string($_POST['alternate_staff5']);
    $period6= mysql_real_escape_string($_POST['period6']);
    $alternate_staff6= mysql_real_escape_string($_POST['alternate_staff6']);*/
    $Comments = mysql_real_escape_string($_POST['Comments']);    


$sql = "INSERT INTO substitute(Email,Period,Department,Alternate_staff,Datee,Class,Comments) VALUES ('$Email','$Period','$Department','$Alternate_staff','$Datee','$Class','$Comments')";
   mysqli_query($db,$sql);
   echo "<script type='text/javascript'>alert('Your Request has been sent');</script>";

   //header("location:index.php");
 }
    
 
   catch (Exception $e) {
    echo $e;
    
  }

}


?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Faculty login</title>
  
      <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
      <link rel="stylesheet" href="css/style.css">
      <script type="text/javascript">
function loaddata()
{
      var name=document.getElementById( "dept" );
  
           if(name)
            {
               $.ajax({
               type: 'POST',
               url: 'sendrequest.php',
               data: {
               dept:name,
            },
            success: function (response) {
   // We get the element having id of display_info and put the response inside it
   $( '#display_info' ).html(response);
         }
                    });
}
 
  
      </script>
      

</head>

<body>
  <form method="post">
  <div class="container">
  <img class="header" src="images/header.jpg"></br></br></br></br>
  
 <h2 class="input-txt"> Alternate...</h2>
 
      
        <table border="1px">
         <tr>
          <tr><input type="email" name="Email" class="input-txt" placeholder="Email"></tr>
        </tr>
          <tr><input type="text" name="Period" class="input-txt" placeholder="Period Number"></tr>
          <tr><select id="dept" class="input-txt" name="select1" onkeyup="loaddata();">
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
                </tr><tr>
                <select class="input-txt" name="Alternate_staff" id="display_info">
                  <option value=''  name='email' disabled selected hidden>Select Email</option>
                 <?php
                                          if( isset( $_POST['dept'] ) )
                                          {

                                                $name = $_POST['dept'];

                                         
                                          $conn = mysqli_connect("localhost","root","","FacultySIET");
                                          $query="SELECT email FROM signup where Department='$name'";
                                          $result=mysqli_query($conn,$query);
                                        
                                         
                                         
                                            
        
        while ($row =  mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['email'].'">'.$row['email'].'</option>';
        }
      }
        ?>
    </select>
                 
          <tr><input type="date" class='input-txt' name="Datee" placeholder="Date"></tr>
          <tr><input type="text" class='input-txt' name="Class" placeholder="Class"></tr>
          
          <tr> <input type="text"name="Comments" class="input-txt" placeholder="Comments"></tr>
                 
          <tr> <input type="submit" class='btn' name="onsubmit"></tr>
          
     
          
          </table>
      </div>
    </div>
  </div>
</form>

      </body>
      </html>
          