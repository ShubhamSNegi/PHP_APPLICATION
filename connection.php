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
?>