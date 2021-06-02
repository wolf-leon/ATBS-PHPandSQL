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
$tbl_name="info"; // Table name
// Connect to server and select database.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
// Get values from form
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$pf=$_POST['pf'];
$pt=$_POST['pt'];
$fli=$_POST['fli'];
$st=$_POST['st'];
$et=$_POST['et'];
$tycl=$_POST['tycl'];
$trip=$_POST['trip'];
$dp=$_POST['dp'];

// Insert data into mysql
$sql="INSERT INTO $tbl_name(Name, Last_Name, email,pf,pt,fli,st,et,tycl,trip,dp)VALUES('$name', '$lastname', '$email','$pf','$pt','$fli','$st','$et','$tycl','$trip','$dp')";
$result=mysqli_query($conn,$sql);
// if successfully insert data into database, displays message "Successful".
if($result){
include 'confirmation.php';
}
else
{
echo "ERROR";
echo "<BR>";
echo "<a href='insert.php'><br><br><br><br>Back to main page<br><br><br><br></a><br>";
}
?>
</body>
</html>