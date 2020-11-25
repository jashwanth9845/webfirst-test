
<?php
session_start();
$host = "localhost:3307";
$dbusername = "root";
$dbpassword = "";
$dbname = "company";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$myname = filter_input(INPUT_POST, 'na');
$mypass = filter_input(INPUT_POST, 'pa');
    $result=$conn->query("SELECT name, password FROM data WHERE name='$myname' and password='$mypass'");
foreach ($result as$value) {
	$na=$value['name'];
	$pa=$value['password'];	
}
if ($mypass==null or $myname==null) 
{

    echo "<script type='text/javascript'>alert('enter userdata');
    window.location.href='login.html';</script>";
}
    elseif($myname!=$na or $mypass!=$pa)
	     {
	  
    echo "<script type='text/javascript'>alert('invalid userdata');
     window.location.href='login.html';</script>";

	     }
	    elseif($myname==$na and $mypass==$pa)
	    {
	  
          header("Location:Home.html");
exit();
}
}
?>
