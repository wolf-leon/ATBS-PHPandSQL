<html>
<style>

</style>
<body>
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="air"; // Database name
$tbl_name="admin"; // Table name
// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysql_select_db()or die("cannot select DB");
// Define $myusername and $mypassword
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and
password='$mypassword'";
$result=mysqli_query($conn,$sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
include'adminmain.php';
}
else
{
echo "<br><br><br><br><h1>Wrong Username or Password</h1>";
}
?>
</body>
</html>