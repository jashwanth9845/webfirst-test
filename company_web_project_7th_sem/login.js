
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Welcome</title>
</head>
<body>
<<<<<<< HEAD
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
=======
<form action="login.js" method="post">
<%
Connection con=null;
ResultSet rs;
Statement s;
String n1=null,pa1=null,New=null,myname=null,mypass=null;
 HttpSession s1=request.getSession(true);
 String name=request.getParameter("n");
 String pa=request.getParameter("p");
 s1.setAttribute("l", name);
 s1.setAttribute("l1",pa);
 try{
		Class.forName("com.mysql.jdbc.Driver");
		String url="jdbc:mysql://localhost:3307/company";
		con=DriverManager.getConnection(url,"root","jashwanth");
		
} catch (ClassNotFoundException e)
 {
	    e.printStackTrace();
 }
   String q="select * from admin";
   s=con.createStatement();
   rs=s.executeQuery(q);
   PrintWriter pw=response.getWriter();
>>>>>>> 45b238102e5cfdfde71f4f53f4b2cccb03578280
  
    
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
