<?php 
include_once("session.php");
include_once("header.php");

include 'database.php';


//create a variables
$army_id=$_POST['army_id'];
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$rank=$_POST['rank'];
$rank_year=$_POST['rank_year'];
//if (empty($_POST['army_id'])|| empty($_POST['firstname']) || empty($_POST['middlename']) || empty($_POST['lastname'])|| ($_POST['rank'])|| ($_POST['rank_year'])) {
//die('Enter all fields');
//}
//else{

//execute the query
$sql = "SELECT rank FROM rank_details WHERE `rank`='$rank'";
$sql = "SELECT year FROM year_lists WHERE `year`='$rank_year'";

$result=mysqli_query( $db, "INSERT INTO `users-detail` 
(`army_id`, `firstname`,`middlename`, `lastname`, `rank`, `rank_year`)
    VALUES ('$army_id','$firstname','$middlename','$lastname','$rank','$rank_year')");
	if ($result==true) {
    echo 'New record created successfully';
} 
else {
		echo'error';
	}
	//}
//header("location: register-user.php");

 ?>
 