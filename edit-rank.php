<?php
include_once("session.php");

include 'database.php';

 global	$army_id;
 
	if( isset($_GET['edit'])&& $_SESSION['role'] == 'administrator' )
	{
		
	$army_id = $_GET['edit'];
			 

		$sql= "SELECT `rank` FROM `users-detail` where army_id='$army_id'";
		
		$result = mysqli_query($db, $sql);
		$rowval= mysqli_fetch_array($result);

	
	if ($result==true) {
		echo 'add new rank ';
	} 
	else {
		echo'error';
	}

 }
	if( isset($_POST['rank'])&& $_SESSION['role'] == 'administrator' )
	{
					 print_r($_POST);

		$rank=($_POST['rank']);
		$sql     = "UPDATE `naswef`.`users-detail` SET `rank`='$rank' WHERE `army_id`='$army_id'";
		$result 	 = mysqli_query($db,$sql);
		print_r($result);
		//$row= mysqli_fetch_array($result);
		
	if ($result==true) {
    echo 'new rank added';
	} 
	else {
		echo'error';
	}
	}
 
?>
<form action="edit-rank.php" method="POST">
Rank: <input type="text" name="rank" value="<?php echo $rowval['rank'];?>"/> <br>
<input type="submit" value=" update "/>
</form>
