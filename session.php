<?php
session_start();
if(isset($_SESSION['role']) && $_SESSION['role'] !== 'administrator') //you can add more checks
{
   
	die('Unauthorized Access');
	// TODO redirect to login page
}

?>