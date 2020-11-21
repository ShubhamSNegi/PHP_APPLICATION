<?php  
   require_once ("connection.php");        
   	if(isset($_POST["email"]) && isset($_POST["password"]))
	{
		$email=mysqli_real_escape_string($conn, $_POST["email"]);  
   		$password=mysqli_real_escape_string($conn,  $_POST["password"]);
		$password = password_hash($password, PASSWORD_DEFAULT);
		$sql = "SELECT  EMAIL, PASSWORD  FROM  login WHERE  EMAIL = '$email' ";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)) {
			 if(password_verify( $row["PASSWORD"],$password))  
                     		{  
                          			echo "SUCESSFULLY LOGED IN ";
                     		} 
			else{
				echo "Incorrect Password";
			}
		}
		}
              		else{
                     		echo "Incorrect Email Id";
                   		}        		
	}
	else{
		echo "No Data Entered";
	}
	   mysqli_close($conn);  
?>    
