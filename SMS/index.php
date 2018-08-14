<html>
	<head>
		<title>Student Management System</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<h3 align="right"><a href="login.php" style="margin-top:30px;margin-right:30px;" >Admin Login</a></h3>
	<h1 align="center">Welcome To Student Management System</h1>
	<div class="header">
	<b><h2>Student Information</h2></b>
	</div>
	<form method="post" action="index.php">
	<div class="input-grp">
         <input name="std" placeholder="Enter Standard" required>		
    </div>  
    <div class="input-grp">
        <input type="text" name="rollno" placeholder="Enter Roll No" required>
    </div> 
		
	<div class="input-grp">
        <input class="btn" type="submit" name="submit"  value="Show Details">
    </div> 
	</form>
</body>
</html>

<?php 
   if(isset($_POST['submit']))
   {
	$standard=$_POST['std'];
	$rollno=$_POST['rollno'];
	include('dbcon.php');
	include('new.php');
    
	 
	 showdetails($standard,$rollno) ; 
	   
   }
?>

