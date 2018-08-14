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
		<div class="header">
            <h2>Students Details</h2>
		</div>	
		<table style="margin-left:460px;">
		 <div class="input-grp"> 
			<tr>
				<th rowspan="5"><img src="dataimg/<?php echo $data['image'];?>"
				style="max-height:150px;max-width:200px">
				<th>Roll No</th>
				<td align="center"><?php echo $data['rollno'];?></td>
			</tr>
			<tr>
				<th>Name</th>
				<td align="center"><?php echo $data['name'];?></td>
			</tr>
			<tr>
				<th>Standard</th>
				<td align="center"><?php echo $data['standard'];?></td>
			</tr>
			<tr>
				<th>City</th>
				<td align="center"><?php echo $data['city'];?></td>
			</tr>
			<tr>
				<th>Parents Contact No</th>
				<td align="center"><?php echo $data['pcont'];?></td>
			</tr>
			</div>
		</table>
		<?php
	}
	
	else
	{ 
	 echo "<script> alert('No Student Found !!')</script>";
	}
	
    	
	  
	  
  }

?>