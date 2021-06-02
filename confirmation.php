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
body{background-image:url('image7.jpeg');background-size:1370px 700px;background-repeat:no-repeat;}
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
  <a href="#login1.php">Logout</a>
  <a href="#about">About</a>
</div>


<form name="form1" method="post" action="pay.php">
<br><br><br><br><br><br><h1><strong>Confirm booking?</strong></h1>
<input type="submit" name="Submit" value="SUBMIT">
<input type="reset" value="CANCEL" ><br>


</form>

</body>
</html>
