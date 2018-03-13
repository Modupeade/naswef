<?php
include_once("session.php");
include_once("header.php");
?>
<link rel="stylesheet" href="styles.css"/>
<section class="body-content">
	<div id="body-container">
			<div id="nav-div">
			<h2 style= "font-size:22px; padding-left:20px; display:inline; padding-right:70px;">Admin Tools </h2><a style="font-size:22px;color:black;"href="register_contributor.php" style="">Register contributor</a>
		<div style="float:right; padding-right:60px;font-size:20px;color:black;"><a href="logout.php">Logout</a></div>
		</div><br>

	<div class ="module">
       <div >
		<button type="button" onclick="window.location.href = 'enter-number.php'"/>User Management</button>
		

		<button type="button" onclick="window.location.href = 'contributors.php'"/>List of Contributors</button>
	</div>
	<div style="padding-top:20px;">
		
	
		<button type="button" onclick="window.location.href = 'debtor-list.php'">List of Debtors</button>
		
		
		
		<button type="button" onclick="window.location.href = 'calculate.php'">Total Calculation </button>
	</div>
		
	</div>
<br><br>







	
	
<?php include "footer.php";
