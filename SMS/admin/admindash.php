<?php

  session_start();
  if(isset($_SESSION['uid']))
  {
	 echo ""; 
  }
  else{
	  header('location:../login.php');
	  
  }
?>
<html>
	<head>
		<title>Student Management System</title>
		<link href="../style.css" rel="stylesheet" type="text/css">
	</head>
<body>
	
	<h3 align="left" style="margin-top:30px;margin-left:50px" ><a href="../index.php">Back To HomePage</a></h3>
	<h3 align="right" style="margin-right:50px" ><a href="logout.php">Log Out</a></h3>
	<h1 align="center"><b>Welcome To Admin Dashboard</b></h1>
	<table>
	<tr>
	<td><h1 style="margin-top:80px;margin-left:400px;font-size:50px;"><a href="addstd.php">Insert Student Details  </h2></a>
	</div></tr>
	<tr>
	<td align="center" ><h2 style="margin-top:100px;margin-left:400px;font-size:50px;" ><a href="updatestd.php">Update Student Details  </h2></a>
	</div></tr>
	<tr align="center" >
	<td align="center" ><h2 style="margin-top:100px;margin-left:400px;font-size:50px;" ><a href="deletestd.php">Delete Student Details  </h2></a>
	</div></tr>
	</div
	
	</table>
</html>
