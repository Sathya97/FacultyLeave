







<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>form</title>
  
      <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<form method="post">
  <div class="container">
  <img class="header" src="images/header.jpg"></br></br></br></br>
  <div class="box">

    <?php
session_start();
echo 'Welcome!'.$_SESSION['Email']; echo'!'; echo'            ';
echo '<a href="index.php?action=logout">logout';


?>
  <div class="login">


  	
     <h1>
      
    <a href="hodform.php"><strong><input type="button" value="New Application" class="btn" id="btn-color" ></a>
    <br><br>
    <a href="SendRequest.php"><input type="button" value="Send Request" class="btn" id="btn-color" ></a>
    <br><br></strong>
    <a href="subtitutefac.php"><strong><input type="button" value="inboxed message" class="btn" id="btn-color" ></a>
    <br><br>
      
    
          </div>
      
  </div>
</div>
</div>
</form>


  
    </body>
</html>