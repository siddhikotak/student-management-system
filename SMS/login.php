<?php
 session_start();
 if(isset($_SESSION['uid']))
 {
	 header('location:admin/admindash.php');
 }
?>
<html>
	<head>
		<title>Admin Login</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
<body>
	 <div class="header">
            <h2>Admin Login</h2>
    </div>
    <form method="post" action="login.php">
        <div class="input-grp">
            <label>Username</label>
            <input type="text" name="uname" required />
        </div> 
        <div class="input-grp">
            <label>Password</label>
            <input type="password" name="pass"required />
        </div> 
        <div class="input-grp">
        <input class="btn" type="submit" name="login" value="Log In"/>  
        </div> 

</form>
</body>
</html>
<?php
	
	include("dbcon.php");
	
	if(isset($_POST["login"]))
	{
		$username=$_POST['uname'];
		$password=$_POST['pass'];
		
		$qry="SELECT * FROM `admin` WHERE `username`='$username' and `password`='$password'";
		$run=mysqli_query($con,$qry);
		$rows=mysqli_num_rows($run);
		if($rows<1)
		{
?>	
			<script>
			alert("Username and Password does not match !!");
			window.open("login.php",_self);
			</script>
	<?php
		}
		else
		{
			$data=mysqli_fetch_assoc($run);
			$id=$data["id"];
			
			session_start();
			$_SESSION['uid']=$id;
			header('location:admin/admindash.php');
		}
		
	}

	?>