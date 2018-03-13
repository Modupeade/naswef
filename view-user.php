<?php
//include_once("session.php");
// session_start();

include 'database.php';
include_once("header.php");

//$sql="select * from users-detail;
if(isset($_POST['name'])){
	$army_id = $_POST['name'];
}else{
	$army_id = $_GET['id'];
}
if(empty($army_id)){
			die('Enter Army number');
}
else{

	
$sql="select * from `users-detail` where army_id='$army_id'";
$result=mysqli_query($db,$sql);

	
while($rowval=mysqli_fetch_assoc($result))
 {
	//print_r($rowval);
	
$army_id= $rowval['army_id'];
$firstname= $rowval['firstname'];
$middlename= $rowval['middlename'];
$lastname= $rowval['lastname'];
$rank= $rowval['rank'];

$rank_year= $rowval['rank_year'];
	  //echo "$army_id. $rowval[rank] <a href='edit-rank.php?edit=$rowval[army_id]'>edit</a>";

}

	
}
mysqli_close($db);
 
?>

<link rel="stylesheet" href="mystyles.css"/>
<section class="body-content">
	<div id="body-container">
		<div id="nav-div">
			<h2 style= "font-size:22px; padding-left:20px; display:inline; padding-right:70px;">User view </h2><a style="font-size:22px;color:black;"href="dash.php" style="">Home</a>
		<div style="float:right; padding-right:60px;font-size:20px;color:black;"><a href="logout.php">Logout</a></div>
		</div><br>

			<div id=test1>
				<form>
					<label>Army number:</label>
						<input type="text" id="text1" disabled value='<?php echo $army_id?>' style="width:250px; height:25px; padding-left:7px;" />&nbsp;
						</br></br>
					<label>Firstname:</label>
						<input type="text" id="text2" disabled value='<?php echo $firstname?>' style="width:250px; height:25px; padding-left:7px;"/>&nbsp;
						</br></br>
					<label>Middlename:</label>
					<input type="text" id="text3" disabled value='<?php echo $middlename?>' style="width:250px; height:25px; padding-left:7px;"/>&nbsp;
					</br></br>
					<label>Lastname:</label>
						<input type="text" id="text4" disabled value='<?php echo $lastname?>' style="width:250px; height:25px; padding-left:7px;" />&nbsp;
						</br></br>
					<label>Rank:</label>
						<input type="text" id="text5"  disabled value='<?php echo $rank?>' style="width:250px; height:25px; padding-left:7px;" />&nbsp;
						</br></br>
					<label>Year in rank:</label>
						<input type="text" id="text6" disabled value='<?php echo $rank_year?>' style="width:250px; height:25px; padding-left:7px;" />&nbsp; 
						</br></br>
												
<?php


include 'database.php';
$sql="SELECT * FROM `payment_details` WHERE army_id='$army_id'";

$result = mysqli_query($db, $sql);

echo "<table border='1'>
<tr>
<th>year</th>
<th>1st quarter</th>
<th>2nd quarter</th>
<th>3rd quarter</th>
<th>4th quarter</th>
<th>total</th>
<th>edit</th>

</tr>";
while($row = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['year'] . "</td>";
  echo "<td>" . $row['fquarter'] . "</td>";
  echo "<td>" . $row['squarter'] . "</td>";
  echo "<td>" . $row['tquarter'] . "</td>";
  echo "<td>" . $row['ftquarter'] . "</td>";
  echo "<td>" . $row['total'] . "</td>";
  echo'<td><a href="edit-pay.php?id='.$row['id'].'">edit</a> </td>';
  echo "</tr>";
  }
echo "</table>";


?>

				
	</form>
				<br><br>
				<form action="payment-update.php">
					<input  type="submit" value="Register Payment" style="font-weight: bold;padding:6px 4px;font-size: 120%; background-color:#228b22; color:white;"/><br>
				</form>		
			</div>
			<br><br>
		
		<?php include "footer.php";
?>
<br>