<?php 
		$connection=mysqli_connect("localhost","root","","htp");
		if(!$connection)
			error.mysqli_connect();

		if(isset($_POST["ADD"]))
		{
			$j_name=$_POST["job_name"];
			$j_fare=$_POST["job_fare"];
			$J_rate=$_POST["Hourly_rate"];
			
			$query1="SELECT * FROM job_domain where Job_name='$j_name'";
			 $result1=mysqli_query($connection, $query1);
			
			 if(mysqli_num_rows($result1)>0)
			 {
			 	echo "Sorry.. Job already exists : ";
			 }
			 else
			 {
			 	$query="INSERT INTO job_domain (Job_name,Company_charges,hourly_rate) 
						VALUES ('$j_name','$j_fare','$J_rate')"; 
				$result=mysqli_query($connection, $query);
				if(mysqli_report($result))
				{
					echo "You have been Successfully added.";
					header('Location:AdminHome.php');
					exit;
				}	
			}
		}
		mysqli_close($connection);
	?>
	<!DOCTYPE html>
<html>
<head>
	<title> HTPB | Add Job</title>
</head>
<body bgcolor="grey">
<div style="background-color:purple">
      <h1 style="color: white; margin-left: 450px"> HTPB | Welcome to Online HTPB Admin </h1>
</div>
	<form action="Add_job_domain.php" style="background-color: silver" method="POST">
		<fieldset>
			<label for="job"><b>Job Name : </b></label>
			<input type="text" placeholder="JOB Name" name="job_name" required>
      		<br><br>

      		<label for="job_fare"><b>Job_fare : </b></label>
      		<input type="number" placeholder="Initial fare" name="job_fare" required>
      		<br><br>

      		<label for="Hourly_rate"><b>Hourly_rate : </b></label>
      		<input type="number" placeholder="Rs/:xxx" name="Hourly_rate" required>
      		<br><br>
      		<button type="submit" style="width:160px; height:26px; color: purple; background-color: silver; font-size:18px; border-style:double; border-color: purple" name="ADD" value="submit">Add Job</button>
      	
		</fieldset>
	</form>
</body>
</html>