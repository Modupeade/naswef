<?php
include_once("session.php");
include_once("header.php");

include 'database.php';

//$army_id=$_REQUEST['id'];
$id=$_REQUEST['id'];

$sql="SELECT * FROM `payment_details` WHERE id='".$id."'";
$result = mysqli_query($db, $sql) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<link rel="stylesheet" href="mystyles.css"/>
<section class="body-content">
	<div id="body-container">
		<div style="padding-top:20px;">
			<h2 style= "font-size:22px; padding-left:20px; display:inline; padding-right:70px;">Update Payment</h2><a style="font-size:22px;color:black;"href="dash.php">Home</a>
		</div><br>
		<div id="test2">
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$year=$_REQUEST['year'];
$fquarter=$_REQUEST['fquarter'];
$squarter=$_REQUEST['squarter'];
$tquarter=$_REQUEST['tquarter'];
$ftquarter=$_REQUEST['ftquarter'];
$total=($fquarter+$squarter+$tquarter+$ftquarter);

	
	
$update="update payment_details set fquarter='".$fquarter."',
squarter='".$squarter."', tquarter='".$tquarter."',
ftquarter='".$ftquarter."',total='".$total."' where id='".$id."'";
mysqli_query($db, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='enter-number.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<label>Year:</label><input type="text" name="year"
required value="<?php echo $row['year'];?>" style="width:150px; height:25px; padding-left:7px;" /><br><br>

<label>First-quarter:</label><input type="text" name="fquarter"
required value="<?php echo $row['fquarter'];?>" style="width:150px; height:25px; padding-left:7px;"/><br><br>
<label>Second-quarter:</label><input type="text" name="squarter" 
required value="<?php echo $row['squarter'];?>" style="width:150px; height:25px; padding-left:7px;"/><br><br>
<label>Third-quarter:</label><input type="text" name="tquarter" 
required value="<?php echo $row['tquarter'];?>" style="width:150px; height:25px; padding-left:7px;"/><br><br>
<label>Fourth-quarter:</label><input type="text" name="ftquarter" 
required value="<?php echo $row['ftquarter'];?>" style="width:150px; height:25px; padding-left:7px;"/><br><br>

<p><input name="submit" type="submit" value="Update" style="font-weight:bold; padding:4px 4px;font-size: 120%;margin-left:120px; background-color:#228b22; color:white;"></p>
</form>
<?php } ?>
</div>
</div>
		<br><br>
		
		
		<?php include "footer.php";?>
		<br>
