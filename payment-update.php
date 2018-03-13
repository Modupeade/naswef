<?php
include_once("session.php");
include_once("header.php");

?>
<link rel="stylesheet" href="mystyles.css"/>
<section class="body-content">
	<div id="body-container">
	<div id="nav-div">
<h2 style= "font-size:22px; padding-left:20px; display:inline; padding-right:70px;">Payment Registration</h2><a style="font-size:22px;color:black;"href="dash.php" style="">Home</a>
		<div style="float:right; padding-right:60px;font-size:20px;color:black;"><a href="logout.php">Logout</a></div>
		</div><br>
			<div id=test1>
				<form action="process-pay.php" method="POST">
					<label>Army number:</label>
						<input type="text"  value="" name="army_id"  style="width:200px; height:25px;" />&nbsp;
						</br></br>
					<label>Year:</label>
						<input type="text"  value="" name="year"  style="width:200px; height:25px;" />&nbsp;
						</br></br>
					<label>First-quarter:</label>
					
						<input type="text"  value="" name="fquarter"  style="width:200px; height:25px;"/>&nbsp;
						</br></br>
					<label>Second-quarter:</label>
						<input type="text"  value="" name="squarter" style="width:200px; height:25px;" />&nbsp;
						</br></br>
					<label>Third-quarter:</label>
						<input type="text"  value="" name="tquarter" style="width:200px; height:25px;" />&nbsp;
						</br></br>
					<label>Fourth-quarter:</label>
						<input type="text"  value="" name="ftquarter" style="width:200px; height:25px;" />&nbsp;
						</br></br>
					<input type="submit" value="Submit" style="font-weight: bold;padding:4px 2px;font-size: 120%;margin-left:180px; background-color:#228b22; color:white;"/>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				</form>

			</div>
		<br><br>
		
		
		<?php include "footer.php";?>
		<br>