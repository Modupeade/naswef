<?php
include 'database.php';
//$sql="select * from accountdtl";
$sql="select * from `users-detail` where army_id='$_POST[name]'";
$result=mysqli_query($db,$sql);
while($rowval=mysqli_fetch_assoc($result))
 {
$army_id= $rowval['army_id'];
$firstname= $rowval['firstname'];
$lastname= $rowval['lastname'];
$rank= $rowval['rank'];
$rank_year= $rowval['rank_year'];
}
mysqli_close($db);
 
?>
<html>
<body>
<form>
 
  <table  style="color:purple;border-style:groove; height:150px;width:350px" background="3.jpg">
        <tr>
           
            <td style="font-family:Copperplate Gothic Bold">&nbsp;</td>
        </tr>
        
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">Army number</td>
            <td class="auto-style4">
                <input id="Text2" type="text" value='<?php echo  $army_id; ?>'/></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">First Name:</td>
            <td class="auto-style4">
                <input id="Text3" type="text" value='<?php echo  $firstname; ?>' /></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Last Name:</td>
            <td class="auto-style4">
                <input id="Text4" type="text" value='<?php echo  $lastname; ?>' /></td>
        </tr>
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">Rank:</td>
            <td class="auto-style4">
                <input id="Text5" type="text" value='<?php echo  $rank; ?>' /></td>
        </tr>
        <tr>
           <td style="color:red;background-color:aqua;" class="auto-style3">Rank in year:</td>
            <td class="auto-style4">
                <input id="Text6" type="text" value='<?php echo  $rank_year; ?>' ></td>
        </tr>
        
        <tr>
            <td></td>
        </tr>
    </table>
</form>
</body>
</html>