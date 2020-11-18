{
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
		String url="jdbc:mysql://localhost:3306/hotel";
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
	    	
	    	   RequestDispatcher rd=request.getRequestDispatcher("Password.html");
	    		 rd.include(request, response);
	    		
	    }
	    if(!myname.equalsIgnoreCase(name) || !mypass.equals(pa))
	     {
	    	 RequestDispatcher rd=request.getRequestDispatcher("Welcome.html");
	    	 pw.write("<p style=color:red> Invalid username or password</p>");
	    	 rd.include(request, response); 
	     }
}