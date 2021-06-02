<html>
<head>
</head>
<style>
body{background-image:url('image6.jpeg');background-size:1350px 840px;background-repeat:no-repeat;text-align:center}
</style>
<body>
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="air"; // Database name
$tbl_name="info"; // Table name
// Connect to server and select database.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
// get value of id that sent from address bar
$Seat_no=$_GET['Seat_no'];
// Retrieve data from database
$sql="SELECT * FROM $tbl_name WHERE Seat_no='$Seat_no'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result)

?>
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form  name="form1" method="get" action="update_ac.php" >
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td colspan="12"><strong>Update data of passengers:</strong> </td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>

</tr>
<tr>

<td align="center">&nbsp;</td>
<td align="center"><strong>FirstName</strong></td><br>
<td align="center"><strong>Lastname</strong></td>
<td align="center"><strong>class</strong></td>
<td align="center"><strong>trip</strong></td>
<td align="center"><strong>departure</strong></td>
</tr>

<tr>
<td>&nbsp;</td>
<td align="center">
<input name="Name" type="text" id="Name" value="<?php echo $rows['Name']; ?>">
</td>
<td align="center">
<input name="Last_Name" type="text" id="Last_Name" value="<?php echo $rows['Last_Name']; ?>"
size="15">
</td>
<td>
<input name="tycl" type="text" id="tycl" value="<?php echo $rows['tycl']; ?>"
size="15">
</td>
<td>
<input name="trip" type="text" id="trip" value="<?php echo $rows['trip']; ?>"
size="15">
</td>
<td>
<input name="dp" type="text" id="dp" value="<?php echo $rows['dp']; ?>"
size="15">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input name="Seat_no" type="hidden" id="Seat_no" value="<?php echo $rows['Seat_no']; ?>"></td>
<td align="center"><br><input type="submit" name="Submit" value="Submit"></td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</body>
</html> 


