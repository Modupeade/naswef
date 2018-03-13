<?php
if(!empty($_POST["logout"]))
	$_SESSION["army_id"]= "";
session_destroy(); //Destroy it! So we are logged out now
header("location:index.php?msg=Successfully Logged out"); // Move back to login.php with a logout message
?>