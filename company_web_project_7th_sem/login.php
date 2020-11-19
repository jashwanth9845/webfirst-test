
<?php

$con=new mysqli("localhost:3307","root","","company");
if($con->connect_error)
{
	die("unableto connect".$con->connect_error);

}
echo "database connection successfully";


$result=$con->query("SELECT * FROM userdata");

foreach ($result as $value) {
	$na=$value['name'];
	$pa=$value['password'];
}

  if (isset( $_get['name'] )) {
    $myname=$_get['name'];
}else
{
	$myname = "<br>name is not in post method<br>";
}
if (isset( $_get['password'] )) {
    $mypass=$_get['password'];
}
else
{
	$mypass = "<br> pass is not in post method";
}
echo $myname;
echo $mypass;
    // System.out.println(myname);
     if($myname==null or $mypass==null)
	    {
	    	echo "<p style='color:red'>enter username and password </p>";	
	    }
	    elseif($myname!=$na or $mypass!=$pa)
	     {
	    	 echo "<p style=color:red> Invalid username or password</p>";
	     }
	    elseif($myname==$na and $mypass==$pa)
	    {
	     echo "logged in ";
	    }

?>
