<?php
include_once("session.php");
include 'database.php';
if (empty($_POST['army_id'])OR empty($_POST['username']) OR empty($_POST['password'])OR empty($_POST['role'])) {
	die('Enter all fields');
}
else{
	
//create a variables
$army_id=($_POST['army_id']);
$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];

$result=mysqli_query( $db, "INSERT INTO `user` 
(`army_id`, `username`,`password`, `role`)
    VALUES ('$army_id','$username','$password','$role')");
	if ($result==true) {
    echo 'New record created successfully';
} 
else {
		echo'error';
	}
}


?>
