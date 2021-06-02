<html>
<style>
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

.avatar {
  width: 20%;
  border-radius: 20%;
}
form {border: 8px solid black;
text-align:center;}
p{font-style:italic;font-weight:bold;}
</style>
<body>
<div class="imgcontainer">
    <img src="eee.png" alt="Avatar" class="avatar">
  </div>
<form name="form1" method="post" action="checklogin1.php">
<strong text align="center">Member Login </strong>
<br><br>
<p>Username :
<input name="username" type="text" id="myusername">
<br><br></p>
<p>Password:
<input name="password" type="text" id="mypassword">
<br><br></p>
<input type="submit" name="Submit" value="LOGIN">
</form>
 
</body>
</html>
