<?php
include_once("session.php");
include_once("header.php");






?>
<link rel="stylesheet" href="mystyles.css"/>
<section class="body-content">
	<div id="body-container">
		<div id="nav-div">
			<h2 style= "font-size:22px; padding-left:20px; display:inline; padding-right:70px;">Registration</h2><a style="font-size:22px;color:black;"href="dash.php">Home</a>
		</div><br>
		<div id="test1">
			<h3> Add Users details</h3>
				<form action="register.php" method="POST">
					<label>Army number:</label>
						<input type="text"  value="" name="army_id"  style="width:250px; height:25px;" />&nbsp;
						</br></br>
					<label>Firstname:</label>
						<input type="text"  value="" name="firstname"  style="width:250px; height:25px;"/>&nbsp;
						</br></br>
					<label>Middlename:</label>
						<input type="text"  value="" name="middlename"  style="width:250px; height:25px;"/>&nbsp;
						</br></br>
					<label>Lastname:</label>
						<input type="text"  value="" name="lastname" style="width:250px; height:25px;" />&nbsp;
						</br></br>
					<label>Rank:</label>
						<select name="rank">
							<option>Choose rank</option>
							<option>Gen</option>
							<option>Lt Gen</option>
							<option>Maj Gen</option>
							<option>Brig Gen</option>
							<option>Col</option>
							<option>Lt Col</option>
							<option>Maj</option>
							<option>Capt</option>
							<option>2Lt/Lt</option>
							<option>AWO</option>
							<option>MWO</option>
							<option>WO</option>
							<option>SSgt</option>
							<option>Sgt</option>
							<option>Cpl</option>
							<option>Sigm/LCpl</option>
						</select>
					</br></br>
					<label>Year in rank:</label>
						<select name="rank_year">
							<option>Choose rank year</option>
							<option>2007</option>
							<option>2008</option>
							<option>2009</option>
							<option>2010</option>
							<option>2011</option>
							<option>2012</option>
							<option>2013</option>
							<option>2014</option>
							<option>2015</option>
							<option>2016</option>
							<option>2017</option>
							<option>2018</option>
							<option>2019</option>

						</select>
						</br></br>
					<input type="submit" value="Submit" style="font-weight: bold;padding:4px 2px;font-size: 120%;margin-left:150px; background-color:#228b22; color:white;"/>
				</form>
		</div>
	<?php include "footer.php";?>
	<br>
