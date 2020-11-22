<?php 
$db_hostname = 'localhost:3306';  
$db_username = 'root';  
$db_password = '';  
$db_name = 'php_application';
$db_connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if( ! $db_connection )  
   {  	
       die('Could not connect: ' . mysqli_error());  
   }
?>
