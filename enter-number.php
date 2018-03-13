<?php
include_once("session.php");
include_once("header.php");

?>

<link rel="stylesheet" href="mystyles.css"/>
<section class="body-content">
	<div id="body-container">
		
		<div id="nav-div">
<h2 style= "font-size:22px; padding-left:20px; display:inline; padding-right:70px;">Users management </h2><a style="font-size:22px;color:black;"href="dash.php" style="">Home</a>
			<a href="register-user.php" style="font-size:22px;color:black; padding-left:45px;" >Add user details</a>
		<div style="float:right; padding-right:60px;font-size:20px;color:black;"><a href="logout.php">Logout</a></div>
		</div><br>
		<div id="test">
			<h3> User view&nbsp;&nbsp;  </h3>
			
			<form action="view-user.php" method="POST">
				<label>Army Number:</label>
					<input type="text" id=name name="name" style="width:250px; height:30px;" />
					<input type="submit" value="Enter" style="font-weight: bold;font-size: 120%; background-color:#228b22; color:white;"/>
			</form>				
		</div>
		
	<br>
	<?php include "footer.php";
	?>
<br>
