<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'php_application';
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
##echo 'Connected successfully';      
  $sql = 'SELECT EMAIL, PASSWORD FROM login';
   $retval = mysqli_query($conn, $sql);
   $row=mysqli_fetch_assoc($retval);
   $db_email=$row["EMAIL"];
   $db_password=$row["PASSWORD"];
##echo "{$row["EMAIL"]}";
$email=$_POST["email"];//receiving name field value in $name variable  
$password=$_POST["password"];//receiving password field value in $password variable  
if($email ==$db_email){
	if($password==$db_password)
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
mysqli_close($conn);  
?>    