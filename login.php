<?php  
   require_once  "connection.php" ;        
   	if( isset($_POST["email"])  &&  isset( $_POST["password"] ) )
	{
		$email = mysqli_real_escape_string( $db_connection, $_POST["email"] );  
   		$password = mysqli_real_escape_string( $db_connection,  $_POST["password"] );
		$password = password_hash( $password, PASSWORD_DEFAULT );
		$sql_query = "SELECT  EMAIL, PASSWORD  FROM  login WHERE  EMAIL = '$email' ";
		$result = mysqli_query($db_connection, $sql_query);
		if( mysqli_num_rows($result) > 0 )
		{
		while( $row = mysqli_fetch_assoc($result )) 
		{
			 if( password_verify( $row["PASSWORD"], $password ))  
                     		{  
                          			echo  "SUCESSFULLY LOGED IN ";
                     		} 
			else{
				echo  "Incorrect Password";
			}
		}
		}
              		else{
                     		echo  "Incorrect Email Id";
                   	}        		
	}
	else
	{
		echo "Username or Password not entered";
	}
	   mysqli_close($db_connection);  
?>    
