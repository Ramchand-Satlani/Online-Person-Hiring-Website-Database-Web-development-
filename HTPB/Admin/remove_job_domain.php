<?php 
		$connection=mysqli_connect("localhost","root","","htp");
		if(!$connection)
			error.mysqli_connect();

		if(isset($_POST["Remove"]))
		{
			$j_name=$_POST["job_name"];
			$query1="SELECT * FROM job_domain where Job_name='$j_name'";
			 $result1=mysqli_query($connection, $query1);
			
			 if(mysqli_num_rows($result1)>0)
			 {
			 	$query="DELETE from job_domain where Job_name='$j_name'";
			 	$result=mysqli_query($connection, $query);
			 	if(mysqli_report($result))
				{
					echo "You have been Successfully added.";
					header('Location:AdminHome.php');
					exit;
				}	
			 }
			 else
			 {
			 	echo "Sorry.. Job doesn't exists : ";
			 }
		}
		mysqli_close($connection);
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>Remove Job</title>
</head>
<body bgcolor="grey">
<div style="background-color:purple">
      <h1 style="color: white; margin-left: 450px"> HTPB | Welcome to Online HTPB Admin </h1>
</div>
	<form action="remove_job_domain.php" style="background-color: silver" method="POST">
		<fieldset>
			<label for="job"><b>Job Name : </b></label>
			<input type="text" placeholder="JOB Name" name="job_name" required>
      		<button type="submit" style="width: 200px; height:23px; color: purple; background-color: silver; font-size:18px; border-style: solid; border-color: purple" name="Remove" value="submit">Remove Job</button>
      	
		</fieldset>
	</form>
	 <div class="container">
    </div>
</body>
</html>