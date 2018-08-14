<?php
  session_start();
  if(isset($_SESSION['uid']))
  {
	 echo ""; 
  }
  else
  {
	  header('location:../login.php');  
  }
?>
<html>
	<head>
		<title>Student Management System</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
	<h3 align="right" style="margin-right:50px"><a href="logout.php">Log Out</a></h3>
	<h3 align="left" style="margin-left:50px" ><a href="admindash.php">Back To Dashboard</a></h3>
	<h1 align="center"><b>Welcome To Admin Dashboard</b></h1>
	</div>
	<div class="header">
            <h2>Update Student Details</h2>
        </div>
<?php
  include('../dbcon.php');
   $sid=$_GET['sid'];	
   $sql="SELECT * FROM `student` WHERE `id`='$sid'";
   $run=mysqli_query($con,$sql);
   $data=mysqli_fetch_assoc($run);



?>
	<form method="post" action="updatedata.php" enctype="multipart/form-data">
        <div class="input-grp">
            <label>Roll No</label>
            <input type="text" name="rollno" value="<?php echo $data['rollno'];?>" required>
        </div> 
        <div class="input-grp">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $data['name'];?>" required>
        </div> 
        <div class="input-grp">
            <label>City</label>
            <input type="text" name="city" value="<?php echo $data['city'];?>" required>
        </div> 
        <div class="input-grp">
            <label>Parents Contact No</label>
            <input type="text" name="pcont" value="<?php echo $data['pcont'];?>" required>
        </div>
		<div class="input-grp">
            <label>Standard</label>
            <input type="text" name="std" value="<?php echo $data['standard'];?>" required>
        </div>
		<div class="input-grp">
            <label>Image</label>
			
            <input type="file" name="img"  value="<?php echo $data['image'];?>" required>
        </div>
        <div class="input-grp">
		    <input type="hidden" name="sid" value="<?php echo $data['id'];?>" />
            <input class="btn" type="submit" name="submit"  value="Submit">
        </div> 
        </form>
	</body>
	</html>
	
	
	
	
	
	
	