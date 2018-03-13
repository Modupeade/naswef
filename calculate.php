<?php
include_once("session.php");
include_once("header.php");
?>

	
	
	<link rel="stylesheet" href="mystyles.css"/>
<section class="body-content">
	<div id="body-container">
	<div style="padding-top:20px;">
<h2 style= "font-size:22px; padding-left:20px; display:inline; padding-right:70px;">Calculate personnel welfare fund payment</h2><a style="font-size:22px;color:black;"href="dash.php" style="">Home</a>
		<div style="float:right; padding-right:60px;font-size:20px;color:black;"><a href="logout.php">Logout</a></div>
		</div><br>
			<div id=test>

			<p>Enter your Army number to calculate total payment</p>
			<form action="calculate-pay.php" method="POST">
				<label>Army Number:</label>
					<input type="text" id=name name="name" style="width:250px; height:30px;" />
					<input type="submit" value="calculate" style="font-weight: bold;font-size: 120%; background-color:#228b22; color:white;"/>
			</form>				

	
	
	
	
	
	
	
	
	
	
	
				</div>
		<br><br>
		
		
		<?php include "footer.php";?>
		<br>
	
	
	
	
	