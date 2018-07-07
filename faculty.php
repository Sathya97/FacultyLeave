


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>form</title>
  
      <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="container">
  <img class="header" src="images/header.jpg"></br></br></br></br>
  <div class="box">

    <?php
session_start();
//if(isset($_SESSION['UserId'])){
  //if ((time() - $_SESSION['last_time'])>60) {
    # code...
  //  header("location:logout.php");
 // }

//else{
//$_SESSION['Email'] = $Email;
echo 'Welcome!'.$_SESSION['Email']; echo'!'; echo'            ';
echo '<a href="index.php?action=logout">logout';
//}
//}

?>
  <div class="login">


  	
     <h1>
      
    <a href="facultyform.php"><strong><input type="button" value="New Application" class="btn" id="btn-color" ></a>
    <br><br>
    <a href="subtitutefac.php"><input type="button" value="Inbox" class="btn" id="btn-color" ></a>
    <br><br>
    <a href="send_request.php"><input type="button" value="Send Request" class="btn" id="btn-color" ></a></h1></strong>
     <br><br> 
    
          </div>
      
  </div>
</div>
</div>
  
    </body>
</html>