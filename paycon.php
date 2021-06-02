<html>
<style>
body{background-image:url('image1.jpeg');text-align:center;background-repeat:no-repeat;background-size:1360px 620px}
</style>
<body>
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="air"; // Database name
$tbl_name="pay"; // Table name
// Connect to server and select database.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
// Get values from form
$name=$_POST['name'];
$credit=$_POST['credit'];
$cvv=$_POST['cvv'];

// Insert data into mysql
$sql="INSERT INTO $tbl_name(name,credit,cvv)VALUES('$name', '$credit', '$cvv')";
$result=mysqli_query($conn,$sql);
// if successfully insert data into database, displays message "Successful".
if($result){
echo "<br><br><br><br><h1>Booking Successful!!!!!</h1><br>";
echo "<a href='insert.php'><h1>Back to home page</h1><br><br><br><br></a><br>";

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