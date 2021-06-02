<!DOCTYPE html>
<html >
<head>
<title>Page Title</title>

<style>

body {
  font-family: Arial;
  margin: 0;
  text-align: center;
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
body{background-image:url('image6.jpeg');background-size:1300px 650px;background-repeat:no-repeat;}
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

<form name="form1" method="post" action="paycon.php">
<h3>Payment</h3>
 Name on Card:<br><input type="text" id="name" name="name" placeholder="leon menezes"><br><br>
Credit card number:<br><input type="text" id="credit" name="credit" placeholder="1111-2222-3333-4444"><br><br>
CVV:<br><input type="text" id="cvv" name="cvv" placeholder="352"><br><br>
<input type="submit" name="Submit" value="SUBMIT">
<input type="reset" value="CANCEL" ><br>

    </form>    
</body>
</html>
