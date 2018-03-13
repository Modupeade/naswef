<?php
include_once("session.php");
include_once("header.php");






?>
<link rel="stylesheet" href="mystyles.css"/>
<section class="body-content">
	<div id="body-container">
		<div  id="nav-div">
			<h2 style= "font-size:22px; padding-left:20px; display:inline; padding-right:70px;">Removal of contributor</h2><a style="font-size:22px;color:black;"href="dash.php">Home</a>
		</div><br>
		<div id="test">
	





<?php



 if(isset($_POST['name'])){
	$army_id = $_POST['name'];

	
	
		$sql     = "DELETE  from `users-detail` WHERE `army_id`='$army_id'";
		$result = mysqli_query($db, $sql);
	
			if ($result==true) {
    echo 'user delete ';
} 
else {
		echo'error';
	}

	}	
	
	
		
		
		
		
		
		
		
		?>
		<form action="delete_user.php" method="POST">
				<label>Army Number:</label>
					<input type="text" id=name name="name" style="width:250px; height:30px;" />
					<input type="submit" value="delete" style="font-weight: bold;font-size: 120%; background-color:#228b22; color:white;"/>
			</form>

		</div>
				<br>
		
		
		<?php include "footer.php";?>
		<br>
		
		