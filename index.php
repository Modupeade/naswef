<?php
include "functions.php";
$title="Home";
get_header(); ?>
<link rel="stylesheet" href="mystyles.css"/>

			<section class="body-content">
					<div id="body-container">
						<div class = "next-bar">
						<h2 style="padding:5px;">Sign in</h2>
						</div>
		
					<div class ="form-sect">
					
						<form action="login.php" method= "post">
							Username:&nbsp;<input type="text" name="username" value=""style="width:250px; height:25px;"/>
						  </br></br>
							Password:&nbsp;<input type="password" name="password" value=""style="width:250px; height:25px;"/>
						  <br><br>
						  <input type="submit" value="Sign in" style="font-weight: bold;font-size: 110%; background-color:#228b22; color:white;"/>
						</form>
					</div>
					
				
				
				
				
				
				
				
			
			
<?php get_footer(); ?>