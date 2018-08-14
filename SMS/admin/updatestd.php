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
	<form action="updatestd.php" method="post">
		<div class="input-grp">
            <label>Standard</label>
            <input type="number" name="standard" placeholder="Enter Standard" required>
        </div> 
        <div class="input-grp">
            <label>Name</label>
            <input type="text" name="stuname" placeholder="Enter Name" required />
        </div> 
        <div class="input-grp">
        <input class="btn" type="submit" name="submit" value="Search"/>  
        </div>
    </form>
	<table align="center" border="1" width="80%" style="margin-top:30px;margin-left:115px; margin-bottom:300px;">
	<tr align="center" style="background-color:palevioletred; height:50px; color:white;" >
	<th><h3>No</th>
	<th><h3>Image</th>
	<th><h3>Name</th>
	<th><h3>Rollno</th>
	<th><h3>Edit</th>
	</tr>
	
<?php

    if(isset($_POST['submit']))
	{
		
		include('../dbcon.php');
		$standard=$_POST['standard'];
		$name=$_POST['stuname'];
		
		$sql="SELECT * FROM `student` WHERE `standard` = '$standard' and `name` LIKE '%$name%'";
		
		$run=mysqli_query($con,$sql);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr><td colspan='5'>No Record Found...</td></tr>";
		}
		else
		{
			$count=0;
			while($data=mysqli_fetch_assoc($run))
			{
				$count++;
				?>
				<tr align="center">
				<td><?php echo $count; ?></td>
				<td><img src="../dataimg/<?php echo $data['image'];?>" style="max-height:100px;"></td>
				<td><?php echo $data['name'];?></td>
				<td><?php echo $data['rollno'];?></td>
				<td><a href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
				</tr>
				
				
				<?php
				
			}
			
		}
	}

?>	
</table>