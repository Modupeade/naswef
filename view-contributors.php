<?php
include 'database.php';
include_once("header.php");
?>
<link rel="stylesheet" href="mystyles.css"/>
<section class="body-content">
	<div id="body-container">
		<div style="padding-top:20px;Padding-left:20px; background-color:#f2f2f2;border:1px solid #d4d4d4;">
			<h2 style= "font-size:22px; padding-left:20px; display:inline; padding-right:70px;">View contributors</h2><a style="font-size:22px;color:black;"href="dash.php" style="">Home</a>
		<div style="float:right; padding-right:60px;font-size:20px;color:black;"><a href="logout.php">Logout</a></div><br>
</div>
<br>
		<div style="padding-top:20px;Padding-left:20px;">

<?php
$sql="SELECT `army_id`,`firstname`,`middlename`,`lastname`,`rank`,`rank_year` FROM `users-detail` ";

$result = mysqli_query($db, $sql);
echo "<table border='1'>
<tr>
<th>Army Number</th>
<th>Firstname</th>
<th>Middlename</th>
<th>Lastname</th>
<th>Rank</th>
<th>rank_year</th>
<th>edit</th>
<th>delete</th>

</tr>";
if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td><a href='view-user.php?id=".$row['army_id']."'>" . $row['army_id'] . "</a></td>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['middlename'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['rank'] . "</td>";
    echo "<td>" . $row['rank_year'] . "</td>";
  echo'<td><a href="edit-user.php?id='.$row['army_id'].'">edit</a> </td>';
  echo'<td><a href="delete-con.php?id='.$row['army_id'].'">delete</a> </td>';

  echo "</tr>";
  }
echo "</table>";
} else {
    echo "0 results";
}

?>
<br>
		</div></div><br>

		<?php include "footer.php";
?>
<br>