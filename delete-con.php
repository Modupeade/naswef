<?php
include_once("session.php");
include_once("header.php");

include 'database.php';
$army_id=$_REQUEST['id'];

		$sql     = "DELETE  from `users-detail` WHERE army_id='$army_id'";
		$result = mysqli_query($db, $sql);
	
			if ($result==true) {
    echo 'user delete ';
} 
else {
		echo'error';
	}




?>
<link rel="stylesheet" href="mystyles.css"/>
<section class="body-content">
	<div id="body-container">
		<div style="padding-top:20px;">
			<h2 style= "font-size:22px; padding-left:20px; display:inline; padding-right:70px;">User view </h2><a style="font-size:22px;color:black;"href="dash.php" style="">Home</a>
		<div style="float:right; padding-right:60px;font-size:20px;color:black;"><a href="logout.php">Logout</a></div>
		</div><br>

