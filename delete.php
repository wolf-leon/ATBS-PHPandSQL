
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="air"; // Database name
$tbl_name="info"; // Table name
// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
// get value of id that sent from address bar
$Seat_no=$_GET['Seat_no'];
// "Deleted Successfully";
echo "<BR>";
//echo "<a href='adminmain.php'>Back to main page</a>";
 //Delete data in mysql from row that has this id
$sql="DELETE FROM $tbl_name WHERE Seat_no='$Seat_no'";
$result=mysqli_query($conn,$sql);
// if successfully deleted
if($result){
include 'adminmain.php';
}
else
{
echo "ERROR";
}
?>
