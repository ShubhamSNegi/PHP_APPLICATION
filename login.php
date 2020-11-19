<?php  
$email=$_POST["email"];//receiving name field value in $name variable  
$password=$_POST["password"];//receiving password field value in $password variable  
if($email =="shubham@gmail.com"){
	if($password=="321sakshi")
	{
		echo "Success, entered password and email id is correct";
	}
	else{
		echo"Password Incorrect";
	}
}
else{
echo "Email Id Incorrect";
}  
?>    