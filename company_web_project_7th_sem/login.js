<%@page import="org.apache.jasper.tagplugins.jstl.core.Param"%>
<%@page import="java.sql.ResultSet"%>
<%@page import="java.io.PrintWriter"%>
<%@page import="java.sql.DriverManager"%>
<%@page import="java.sql.Statement"%>
<%@page import="java.sql.PreparedStatement"%>
<%@page import="java.sql.Connection"%>
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Welcome</title>
</head>
<body>
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
  
    
    while(rs.next())
    {
   	  n1=rs.getString(1);
   	  pa1=rs.getString(2);
    }
     myname=n1;
     mypass=pa1;
     System.out.println(myname);
	   
	    if(myname.equalsIgnoreCase(name) && mypass.equals(pa))
	    {
	     RequestDispatcher rd=request.getRequestDispatcher("MainPage.jsp");
	    	 rd.forward(request, response);
	    }
	    else
	    {
	    	%>
	    	 <%="<p style='color:red'>enter username and password </p>"%>
	      <% 
	    	   RequestDispatcher rd=request.getRequestDispatcher("Password.html");
	    		 rd.include(request, response);
	    		
	    }
	    if(!myname.equalsIgnoreCase(name) || !mypass.equals(pa))
	     {
	    	 RequestDispatcher rd=request.getRequestDispatcher("Welcome.html");
	    	 pw.write("<p style=color:red> Invalid username or password</p>");
	    	 rd.include(request, response); 
	     }
%>

</form>
</body>
</html>
