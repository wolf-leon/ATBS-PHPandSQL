<!DOCTYPE html>
<html >
<head>
<title>Page Title</title>

<style>

body {
  font-family: Arial;
  margin: 0;
}

.header {
  padding: 10px;
  text-align: center;
  background: black;
  color: white;
  font-size: 25px;
  width: 151%;
   
}
.topnav {
  overflow: hidden;
  background-color:black;
  width: 152%;
}

.topnav a {
  
  color: blue;
  text-align: center;
  padding: 14px 16px;
 
  font-size: 17px;
}

.topnav a:hover {
  background-color: red;
  color: black;
}
form{ text-align:center;}
p{font-style:italic;text-decoration:underline;}
</style>
</head>
<body>

<div class="header">
 
  <p>Welcome to Online  Airline Ticket booking system </p>
</div>
<div class="topnav">
  <a href="adminmain.php">Home</a>
  <a href="login1.php">Logout</a>
  <a href="about.php">About</a>
</div>

<table>
<style>
table {

	  border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}

</style>
<tr>


<th>seatno&nbsp</th>
<th>first name&nbsp</th>
<th>last name</th>
<th>email</th>
<th>from</th>
<th>to</th>
<th>flight</th>
<th>&nbspstart time&nbsp&nbsp</th>
<th>end time&nbsp&nbsp</th>
<th>class</th>
<th>trip</th>
<th>departure</th>
<th>Update</th>
<th>Delete</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "air");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Seat_no,Name,Last_Name,email,pf,pt,fli,st,et,tycl,trip,dp FROM info";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($rows=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $rows['Seat_no']; ?></td>
<td><?php echo $rows['Name']; ?>&nbsp&nbsp&nbsp&nbsp</td>
<td><?php echo $rows['Last_Name']; ?>&nbsp&nbsp&nbsp&nbsp</td>
<td><?php echo $rows['email']; ?>&nbsp&nbsp&nbsp&nbsp</td>
<td><?php echo $rows['pf']; ?>&nbsp&nbsp&nbsp&nbsp</td>
<td><?php echo $rows['pt']; ?>&nbsp&nbsp&nbsp&nbsp</td>
<td><?php echo $rows['fli']; ?>&nbsp&nbsp&nbsp&nbsp</td>
<td><?php echo $rows['st']; ?>&nbsp&nbsp&nbsp&nbsp</td>
<td><?php echo $rows['et']; ?>&nbsp&nbsp&nbsp&nbsp</td>
<td><?php echo $rows['tycl']; ?>&nbsp&nbsp&nbsp&nbsp</td>
<td><?php echo $rows['trip']; ?>&nbsp&nbsp&nbsp&nbsp</td>
<td><?php echo $rows['dp']; ?>&nbsp&nbsp&nbsp&nbsp</td>
<td align="center"><a href="update.php?Seat_no=<?php echo $rows['Seat_no']; ?>">update&nbsp</a></td>
<td align="center"><a href="delete.php?Seat_no=<?php echo $rows['Seat_no']; ?>">delete&nbsp</a></td>
</tr>
<?php
}

echo "</table>";



} else { echo "0 results"; }
$conn->close();
?>
</table>
<br>
<a href="order.php?id=1">Order By firstname Ascending</a>
<br><br>
<a href="order.php?id=2">Order By lastname Descending</a>
<br><br>




</body>
</html>