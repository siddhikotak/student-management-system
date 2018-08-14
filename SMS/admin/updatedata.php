<?php
 if(isset($_POST['submit']))
   {
 
  include('../dbcon.php');
  $rollno=$_POST['rollno'];
  $name=$_POST['name'];
  $city=$_POST['city'];
  $pcont=$_POST['pcont'];
  $std=$_POST['std'];
  $id=$_POST['sid'];
  $img=$_FILES['img']['name'];
  
   $tempname=$_FILES['img']['tmp_name'];
  
   move_uploaded_file($tempname,"../dataimg/$img");

    $qry="UPDATE `student` SET `rollno`='$rollno',`name`='$name',`city`='$city',
	`pcont`='$pcont',`standard`='$std',`image`='$img' WHERE `id`='$id'";
	$run=mysqli_query($con,$qry);
	
	if($run==true)
	{
		?>
		<script>
		   alert('Data Updated Successfully !!');
		   window.open('updateform.php?sid=<?php echo $id;?>','_self');
		</script>
		<?php
	}

   }

?>