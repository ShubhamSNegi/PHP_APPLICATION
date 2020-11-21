<!DOCTYPE html>
<html>
     <head> 	
     <title> Login Page </title> 
     </head>
     <body>
	
	<center><h1>Login Page</h1></center>
	<div align="center" border>
	<form action="login.php" method="post">
	<label for="Email">Username:</label>
  	<input type="email" name="email" id="Email" required><br><br>
	<label for="password">Password:</label>
   	<input type="password" id="password" name="password" minlength="8" required><br><br>
	<input type="submit" value="Login Up">
	</form>
	</div>
     </body>
</html>   