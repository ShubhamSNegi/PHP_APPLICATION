<!DOCTYPE html>
<html>
     <head> 	
            <title> Login Page </title> 
     </head>
     <body>
	<center><h1>Login Page</h1></center>
	<div align="center">
	      <form action="login.php" method="post">
		<label for="email">Username:</label>
  		<input type="email" name="email" id="email" required>
		<br><br>
		<label for="password">Password:</label>
   		<input type="password" id="password" name="password" minlength="8" required>
		<br><br>
		<input type="submit" value="Login In">
	      </form>
	</div>
     </body>
</html>   
