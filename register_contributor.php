<?php
include_once("session.php");
include_once("header.php");






?>
<link rel="stylesheet" href="mystyles.css"/>
<section class="body-content">
	<div id="body-container">
		<div style="padding-top:20px;">
			<h2 style= "font-size:22px; padding-left:20px; display:inline; padding-right:70px;">Registration</h2><a style="font-size:22px;color:black;"href="dash.php">Home</a>
		</div><br>
		<div id="test2">
			<h3> Register contributor</h3>
				<form action="contributor_reg.php" method="POST">
					<label>Army number:</label>
						<input type="text"  value="" name="army_id"  style="width:250px; height:25px;" />&nbsp;
						</br></br>
					<label>Username:</label>
						<input type="text"  value="" name="username"  style="width:250px; height:25px;"/>&nbsp;
						</br></br>
					<label>Password:</label>
						<input type="text"  value="" name="password"  style="width:250px; height:25px;"/>&nbsp;
						</br></br>
					<label>Role:</label>
						<select  name="role">
							<option  style="display:none";>Choose role</option>
							<option>administrator</option>
							<option>user</option>
						</select>

												</br></br>
<input type="submit" value="Submit" style="font-weight: bold;padding:4px 2px;font-size: 120%;margin-left:150px; background-color:#228b22; color:white;"/>
				</form>
		</div>
	<?php include "footer.php";?>
	<br>
