<html>
<style>
body{background-image:url('49.jpeg');background-size:1350px 750px;background-repeat:no-repeat;text-align:center;}
</style>
<body>
<h1> Passenger Ticket details:</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "air";
$tbl_name="info";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
$Seatno=mysqli_real_escape_string($conn,$_POST['Name']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT *  FROM $tbl_name WHERE Name='$Seatno' ";
$result = $conn->query($sql);

$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($rows=mysqli_fetch_array($result)){
 echo 'Name:';
 echo $rows['Name'];
 echo '<br><br>';
  echo ' Last Name:';
 echo $rows['Last_Name']; 
 echo '<br><br>';
 echo 'Seat_No:';
 echo $rows['Seat_no'];
echo '<br><br>'; 
 echo 'Place of Departure:';
  echo $rows['pf']; 
  echo '<br><br>';
   echo 'Place of Arrival:';
 echo $rows['pt']; 
 echo '<br><br>';
  echo 'Flight:';
 echo $rows['fli'];
echo '<br><br>'; 
 echo 'From:';
  echo $rows['st'];
echo '<br><br>';
 echo 'To:';  
 echo $rows['et'];
echo '<br><br>'; 
 echo ' Type of Trip:';
 echo $rows['trip'];
 echo '<br><br>';
  echo 'Class:';
 echo $rows['tycl']; 
 echo '<br><br>';
  echo 'Time of Departure:';
 echo $rows['dp']; 
 echo '<br><br>';
}
}

?>
</body>
</html>


