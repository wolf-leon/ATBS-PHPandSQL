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
body{background-image:url('image8.jpeg');background-size:1400px 900px;background-repeat:no-repeat;}
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
  <a href="vt.php">View Ticket</a>
  <a href="login1.php">Logout</a>
  <a href="about.php">About</a>
</div>


<form name="form1" method="post" action="insert_ac.php">
<h1>Enter and select the Details</h1>  
Name : <input name="name" type="text" id="name"><br><br>

Last name : <input name="lastname" type="text" id="lastname"><br><br>

Email : <input name="email" type="text" id="email"><br><br>

From: <select  name="pf" style="width: 150px;" id="pf" >
  <option value="Delhi">Delhi</option>
  <option value="Bangalore">Bangalore</option>
  <option value="Goa">Goa</option>
  <option value="America">America</option>
  <option value="Malta">Malta</option>
  <option value="Spain">Spain</option>
 </select> <br><br>
 
 TO: <select  name="pt" style="width: 150px;" id="pt" >
  <option value="Delhi">Delhi</option>
  <option value="Bangalore">Bangalore</option>
  <option value="Goa">Goa</option>
  <option value="America">America</option>
  <option value="Malta">Malta</option>
  <option value="Spain">Spain</option>>
  </select> <br><br>

Flight:  <select  name="fli" style="width: 150px;" id="fli" >
  <option value="Air Asia">Air Asia</option>
  <option value="Indigo">Indigo</option>
  <option value="Kingfisher">Kingfisher</option>
  </select> <br><br>
  
Date: from<input name="st" type="date" id="st">&nbsp&nbsp&nbsp&nbsp to:<input name="et" type="date" id="et"><br><br>

class:<select  name="tycl" style="width: 150px;" id="tycl" >
  <option value="Economy">Economy</option>
  <option value="Bussiness-class">Bussiness-class</option>
  </select> <br><br>

select trip:<select  name="trip" style="width: 150px;" id="trip" >
  <option value="one-way">one-way</option>
  <option value="round-way">round-way</option>
  </select> <br><br>
  
departure time:<select  name="dp" style="width: 150px;" id="dp" >
  <option value="6:45am">6:45am</option>
  <option value="3:00am">3:00am</option>
  <option value="4:00pm">4:00pm</option>
  <option value="11:00am">11:00am</option>
  <option value="2:00pm">2:00pm</option>
  <option value="5:30pm">5:30pm</option>
  <option value="9:00pm">9:00pm</option>
 </select> <br><br>

<input type="submit" name="Submit" value="SUBMIT">
<input type="reset" value="CANCEL" ><br>
<p>please enter the following fields and submit to book tickets</p>
</form>

</body>
</html>
