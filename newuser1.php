<html>
<style>
body{background-color:orange;text-align:center;}
</style>
<body>
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="air"; // Database name
$tbl_name="memberlog"; // Table name
// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysql_select_db()or die("cannot select DB");
// Define $myusername and $mypassword
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
$sql="INSERT INTO $tbl_name(Username,Password)VALUES( '$myusername', '$mypassword')";
$result=mysqli_query($conn,$sql);
// Mysql_num_row is counting table row

// If result matched $myusername and $mypassword, table row must be 1 row
if($result)
{
include 'insert.php';
}
else
{
echo "<br><br><br><br><h1>invalid Username or Password</h1>";
}
?>
</body>
</html>