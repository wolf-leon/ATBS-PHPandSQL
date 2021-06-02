
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="air"; // Database name
$tbl_name="info"; // Table name
// Connect to server and select database.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
$Seat_no=$_GET['Seat_no'];
$Name=$_GET['Name'];
$Last_Name=$_GET['Last_Name'];
$tycl=$_GET['tycl'];
$trip=$_GET['trip'];
$dp=$_GET['dp'];
// update data in mysql database
$sql="UPDATE $tbl_name SET Name='$Name', Last_Name='$Last_Name', tycl='$tycl',dp='$dp',trip='$trip' WHERE Seat_no='$Seat_no'";
$result=mysqli_query($conn,$sql);
// if successfully updated.
if($result){
include 'adminmain.php';
}
else
{
echo "ERROR";
}
?>
