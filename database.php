<?php
global $db;
$db = new mysqli("localhost", "root", "", "naswef");
if($db->connect_errno > 0 ){
	die("Unable to connect to database".$db->connect_error);
}
?>