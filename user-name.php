<?php

global $db;
$db = new mysqli("localhost", "root", "", "naswef");
if($db->connect_errno > 0 ){
	die("Unable to connect to database".$db->connect_error);
}
	
	//$sql = "INSERT INTO `tblusers` (`id`, `user_id`, `firstname`, `lastname`) VALUES (NULL, '".$_SESSION['user_id']."', 'Olu', 'Amadi');";
	//if ($db->query($sql) === TRUE) {
    //echo "";
//} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
//}	
	
	











?>