<?php
session_start();
$db = mysqli_connect("localhost","root","","FacultySIET");
$Email=$_SESSION['Email'];
 if (isset($_POST['onsubmit'])) {

   //table alternate table
  try {
    
  
    //$Email = mysql_real_escape_string($_POST['Email']);
    $Period= mysql_real_escape_string($_POST['Period']);
     $Department= mysql_real_escape_string($_POST['select']);
    $Alternate_staff= mysql_real_escape_string($_POST['Alternate_staff']);
    $Datee = mysql_real_escape_string($_POST['Datee']);
    $Class = mysql_real_escape_string($_POST['Class']);
    
    
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
      
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
      <script type="text/javascript">
$(document).ready(function(){
  $('#dropdown1').on('change',function(){
    var department = $(this).val();
    if(department){
      $.ajax({
        type:'POST',
        url:'ajaxdata.php',
        data:'dept='+department,
        success:function(html){
          $('#email').html(html);


        }
      });

    } else{
      $('#email').html('<option value="">Select Department first</option>');

    }
    //alert(department);
  });
});
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
           <?php
                  $db = mysqli_connect("localhost","root","","FacultySIET");

                  //Get all dept

                  $sql = "SELECT * FROM department";

                 $result = mysqli_query($db,$sql);
                 //count total number of rows

                 $rowcount = $result->num_rows;
                 ?>
          <tr><select id="dropdown1" class="input-txt" name="select">

            <option value="">Select dept</option>
            <?php
            if($rowcount > 0)
              while ($row = $result->fetch_assoc()) {
                echo'<option value="'.$row['dept'].'">'.$row['dept'].'</option>';

              }
            ?>




 

                  ?>
                </select>
                </tr><tr>
                <select name="email" id="email" class="input-txt">

                 <option value="">Select Email</option>

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
          