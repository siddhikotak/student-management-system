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
	
        <div class="header">
            <h2>Insert Student Details</h2>
        </div>
        <form method="post" action="addstd.php" enctype="multipart/form-data">
        <div class="input-grp">
            <label>Roll No</label>
            <input type="text" name="rollno" placeholder="Enter Roll No" required>
        </div> 
        <div class="input-grp">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter Full Name" required>
        </div> 
        <div class="input-grp">
            <label>City</label>
            <input type="text" name="city" placeholder="Enter City" required>
        </div> 
        <div class="input-grp">
            <label>Parents Contact No</label>
            <input type="text" name="pcont" placeholder="Enter Parents Contact No" required>
        </div>
		<div class="input-grp">
            <label>Standard</label>
            <input type="text" name="std" placeholder="Enter Standard" required>
        </div>
		<div class="input-grp">
            <label>Image</label>
            <input type="file" name="img" required>
        </div>
        <div class="input-grp">
            <input class="btn" type="submit" name="submit"  value="Submit">
        </div> 
        </form>
	</body>
</html>
<?php
   
   if(isset($_POST['submit']))
   {
 
  include('../dbcon.php');
  $rollno=$_POST['rollno'];
  $name=$_POST['name'];
  $city=$_POST['city'];
  $pcont=$_POST['pcont'];
  $std=$_POST['std'];
  $img=$_FILES['img']['name'];
  
   $tempname=$_FILES['img']['tmp_name'];
  
   move_uploaded_file($tempname,"../dataimg/$img");

    $qry="INSERT INTO `student`( `rollno`, `name`, `city`, `pcont`, `standard`, `image`)
	VALUES ('$rollno','$name','$city','$pcont','$std','$img')";
	$run=mysqli_query($con,$qry);
	
	if($run==true)
	{
		?>
		<script>
		   alert('Data Inserted Successfully !!');
		</script>
		<?php
	}

   }
?>
