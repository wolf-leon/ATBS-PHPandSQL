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
  padding: 6px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 20px;
}
.topnav {
  overflow: hidden;
  background-color:black;
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
body{background-image:url('45.jpg');background-size:1350px 840px;background-repeat:no-repeat;}
form{ text-align:center;}
p{font-style:italic;text-decoration:underline;}
</style>
</head>
<body>

<div class="header">
 
  <p>Welcome to Online  Airline Ticket booking system </p>
</div>
<div class="topnav">
  <a href="insert.php">Home</a>
  <a href="login1.php">Logout</a>
  <a href="about.php">About</a>
</div>


<form name="form1" method="post" action="viewticket.php">
<h1>Enter and select the Details to view ticket</h1>  
Name : <input name="Name" type="text" id="Name"><br><br>

Last name : <input name="Last_name" type="text" id="Last_name"><br><br>

Seat no: : <input name="Seatno" type="text" id="Seatno"><br><br>

<input type="submit" name="Submit" value="SUBMIT">
<input type="reset" value="CANCEL" ><br>
<p>please enter the following fields to view tickets </p>
</form>

</body>
</html>