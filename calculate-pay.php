<?php
include_once("header.php");

include 'database.php';
?>
<link rel="stylesheet" href="mystyles.css"/>
<section class="body-content">
	<div id="body-container">
		<div style="padding-top:20px;">
			<h2 style= "font-size:22px; padding-left:20px; display:inline; padding-right:70px;">Total contribution</h2><a style="font-size:22px;color:black;"href="dash.php">Home</a>
		</div><br>
		<div id="test4">

<?php
 if(isset($_POST['name'])){
	$army_id = $_POST['name'];

	
	
		$sql="SELECT `army_id`, `year`, `total` FROM `payment_details`WHERE `army_id`='$army_id'";
	
$result = mysqli_query($db, $sql);

echo "<table border='1'>
<tr>
<th>army_id</th>
<th>year</th>
<th>total</th>
</tr/>";



while($row = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
    echo "<td>" . $row['army_id'] . "</td>";

  echo "<td>" . $row['year'] . "</td>";
  echo "<td>" . $row['total'] . "</td>";

  echo "</tr>";
  }

echo "</table>";?><br>
<?php

		//$sql="SELECT `army_id`, SUM(total) FROM `payment_details`WHERE `army_id`='$army_id'";
			$sql="SELECT `army_id`, (SUM(total)*0.85)+(SUM(total)) FROM `payment_details`WHERE `army_id`='$army_id'";

$result = mysqli_query($db, $sql);
echo'Your total NASWEF contribution is:';
echo "<table border='1'>
<tr>
<th>army_id</th>
<th>Sum total</th>
</tr/>";



while($row = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
    echo "<td>" . $row['army_id'] . "</td>";

  echo "<td>" . $row['(SUM(total)*0.85)+(SUM(total))']. "</td>";

  echo "</tr>";
  }

echo "</table>";




}
	
	
	
		
		?>
</div>
		<br><br>
		
		
		<?php include "footer.php";?>
		<br>
	
		