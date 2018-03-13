<?php
include_once("header.php");
include 'database.php';
?>
<link rel="stylesheet" href="mystyles.css"/>
<section class="body-content">
	<div id="body-container">
		<div style="padding-top:20px; padding-left:40px;">
			<h2 style= "font-size:22px; padding-left:20px; display:inline; padding-right:70px;">View debtors</h2><a style="font-size:22px;color:black;"href="dash.php" style="">Home</a>
		<div style="float:right; padding-right:60px;font-size:20px;color:black;"><a href="logout.php">Logout</a></div><br>
<br>

		<br>

<?php


$sql="SELECT `id`,`army_id`,`year` FROM `payment_details` WHERE fquarter= 0 || squarter= 0 || tquarter= 0  || ftquarter =0  ";

$result = mysqli_query($db, $sql);
echo "<table border='1'>
<tr>		
<th>ID</th>
<th>Army Number</th>
<th>Year</th>
</tr>";
if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td><a href='view-user.php?id=".$row['army_id']."'>" . $row['army_id'] . "</a></td>";
  echo "<td>" . $row['year'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
<br>

		<?php include "footer.php";
?>
<br>
