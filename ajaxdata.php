<?php
session_start();
$db = mysqli_connect("localhost","root","","FacultySIET");



if(isset($_POST["dept"]) && !empty($_POST["dept"])){
	//echo"gsdfgh";

    $var = $_POST['dept'];
	$sql = "SELECT * FROM signup WHERE Department = '$var' ";


	$result = mysqli_query($db,$sql);
                 //count total number of rows

                 $rowcount = $result->num_rows;


	if($rowcount >= 0)
		echo '<option value="">Select mail</option>';
		
              while ($row = $result->fetch_assoc()) {
                echo'<option value="'.$row['Email'].'">'.$row['Email'].'</option>';

              }


		
		
	}


?>