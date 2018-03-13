<?php
include 'database.php';
include_once("header.php");

//create a variables
$army_id=$_POST['army_id'];
$year=$_POST['year'];
$fquarter=$_POST['fquarter'];
$squarter=$_POST['squarter'];
$tquarter=$_POST['tquarter'];
$ftquarter=$_POST['ftquarter'];
$total=($fquarter+$squarter+$tquarter+$ftquarter);
//execute the query
			//if(empty($row)){
				/*
if (empty($_POST['army_id'])|| empty($_POST['year']) || empty($_POST['fquarter'])|| empty($_POST['squarter'])|| empty($_POST['tquarter'])|| ($_POST['ftquarter'])) {
		die('Enter all fields');
}
else{*/

	$result=mysqli_query( $db,"INSERT INTO `payment_details` 
	(`id`,`army_id`,`year`,`fquarter`,`squarter`,`tquarter`,`ftquarter`,`total`) 
	VALUES ('NULL','$army_id','$year','$fquarter','$squarter','$tquarter','$ftquarter','$total')");
	if ($result==true) {
    echo 'New record created successfully';
} 
else {
		echo'error';
	}
//
//$sql=mysqli_query( $db, "UPDATE `payment_details`  
//SET `army_id='$army_id',`user_id`='".$_SESSION['user_id']."',`year`='$year',`fquarter`='$fquarter',`squarter`='$squarter',`tquarter`='$tquarter',`ftquarter`='$ftquarter',`total`='$total' WHERE 1");
?>
 <a href="enter-number.php">go back</a>
