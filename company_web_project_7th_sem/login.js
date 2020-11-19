
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Welcome</title>
</head>
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

   $q="select * from userdata";
   $s=con.createStatement();
   $rs=s.executeQuery(q);
  
    
    while($rs.next())
    {
   	  $n1=$rs.getString(1);
   	  $pa1=$rs.getString(2);
    }
     $myname=n1;
     $mypass=pa1;
    // System.out.println(myname);
     if($myname==null or $mypass==null)
	    {
	    	echo "<p style='color:red'>enter username and password </p>"
	       
	    		
	    }
	    if($myname!=$name or $mypass!=$pa)
	     {
	    	 echo "<p style=color:red> Invalid username or password</p>"
	    	
	     }
	    if($myname==$name and $mypass==$pa)
	    {
	     echo "logged in ";
	    }
?>

</form>
</body>
</html>
