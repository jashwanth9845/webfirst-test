<!DOCTYPE html>
<html>
<head>
	<title>mysql wtth php</title>
<body>
<?php 
$server_name='localhost:3307';
$user_name='root';
$password="";
$database="company";

$connection=new mysqli($server_name,$user_name,$password,$database);
if($connection->connect_error)
{
	die("unableto connect".$connection->connect_error);

}
echo "database connection successfully";
 ?>

</body>
</html>