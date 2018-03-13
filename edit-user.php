<?php
include_once("session.php");
include_once("header.php");

include 'database.php';

//$army_id=$_REQUEST['id'];
$army_id=$_REQUEST['id'];

$sql="SELECT * FROM `users-detail` WHERE army_id='$army_id'";

$result = mysqli_query($db, $sql) or die ( mysqli_error());

$row = mysqli_fetch_assoc($result);
?>

<link rel="stylesheet" href="mystyles.css"/>
<section class="body-content">
	<div id="body-container">
		<div style="padding-top:20px;">
			<h2 style= "font-size:22px; padding-left:20px; display:inline; padding-right:70px;">User Update</h2><a style="font-size:22px;color:black;"href="dash.php">Home</a>
		</div><br>
		<div id="test2">
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$army_id=$_REQUEST['army_id'];
$firstname=$_REQUEST['firstname'];
$middlename=$_REQUEST['middlename'];
$lastname=$_REQUEST['lastname'];
$rank=$_REQUEST['rank'];
$rank_year=$_REQUEST['rank_year'];

	
	
$update="UPDATE `users-detail` set army_id='".$army_id."', firstname='".$firstname."',
middlename='".$middlename."', lastname='".$lastname."', rank='".$rank."', rank_year='".$rank_year."' where army_id='".$army_id."'";
	//print_r($sql);

mysqli_query($db, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view-contributors.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['army_id'];?>" />
<p>army_id:<input type="text" name="army_id"
required value="<?php echo $row['army_id'];?>" /></p>

<p>firstname:<input type="text" name="firstname"
required value="<?php echo $row['firstname'];?>" /></p>
<p>middlename<input type="text" name="middlename" 
required value="<?php echo $row['middlename'];?>" /></p>
<p>lastname<input type="text" name="lastname" 
required value="<?php echo $row['lastname'];?>" /></p>
<p>rank<input type="text" name="rank" 
required value="<?php echo $row['rank'];?>" /></p>

<p>rank_year<input type="text" name="rank_year" 
required value="<?php echo $row['rank_year'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
