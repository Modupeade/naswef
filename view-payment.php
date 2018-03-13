<?php

$q=$_GET["q"];
include 'database.php';
$sql="SELECT `year`,`fquarter`,`squarter`,`tquarter`,`ftquarter`,`total` FROM `payment_details` WHERE id = '".$q."'";

$result = mysqli_query($db, $sql);

echo "<table border='1'>
<tr>
<th>year</th>
<th>1st quarter</th>
<th>2nd quarter</th>
<th>3rd quarter</th>
<th>4th quarter</th>
<th>total</th>
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
  echo "</tr>";
  }
echo "</table>";


?>

























	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
