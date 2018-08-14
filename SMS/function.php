<?php
  
  function showdetails($standard,$rollno)
  {
	include('dbcon.php');
	$sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`='$standard'";
	$run=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($run)>0)
	{
		$data=mysqli_fetch_assoc($run);
		?>
		<table align="center" border="1" style="margin-top:70px;margin-bottom:200px;border-color:palevioletred;" >
			<tr>
				<th colspan="3" align="center" style="background-color:palevioletred; height:50px; 
				color:white;"><h2>Student Details</h2></th>
			</tr>
			<tr>
				<td rowspan="5"><img src="dataimg/<?php echo $data['image'];?>"style="max-height:150px;max-width:200px">
				<th>Roll No</th>
				<td><?php echo $data['rollno'];?></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><?php echo $data['name'];?></td>
			</tr>
			<tr>
				<th>Standard</th>
				<td><?php echo $data['standard'];?></td>
			</tr>
			<tr>
				<th>City</th>
				<td><?php echo $data['city'];?></td>
			</tr>
			<tr>
				<th>Parents Contact No</th>
				<td><?php echo $data['pcont'];?></td>
			</tr>
			
		</table>
		<?php
	}
	
	else
	{ 
	 echo "<script> alert('No Student Found !!')</script>";
	}
	
    	
	  
	  
  }

?>