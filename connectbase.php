
<?php
$name = 'localhost';
$uname ='root';
$password = '';
$bd_name = 'contrats';

$conn = mysqli_connect($name,$uname,$password,$bd_name);
 if (!$conn) {
   die("database connection failed" . mysqli_error($conn));
 }
?>