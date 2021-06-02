<!DOCTYPE html>
<style>
body{background-image:url('1.jpeg');background-size:1370px 750px;background-repeat:no-repeat;}
</style>
<body>
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
$id=$_GET['id'];

if($id==1)
{
$sql="SELECT * FROM $tbl_name ORDER BY Name ASC";
}
else
{
$sql="SELECT * FROM $tbl_name ORDER BY Name DESC";
}
$result=mysqli_query($conn,$sql);
?>
<table width="400" border="1" cellspacing="0" cellpadding="3">

<tr>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Lastname</strong></td>
<td align="center"><strong>Email</strong></td>
</tr>
<?php
while($rows=mysqli_fetch_array($result)){
?>

<tr>
<td><?php echo $rows['Name'];?></td>
<td><?php echo $rows['Last_Name']; ?></td>
<td><?php echo $rows['email']; ?></td>
</tr>
<?php
}
?>
</table>
<?php
if($result){
echo "<br>Successful";
echo "<br><br>";
echo "<a href='adminmain.php'>Back</a>";
}
else {
echo "ERROR";
}
?>
</body>
</html>


