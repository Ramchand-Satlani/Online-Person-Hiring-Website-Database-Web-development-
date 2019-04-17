<?php 
		$connection=mysqli_connect("localhost","root","","htp");
		if(!$connection)
			error.mysqli_connect();

		if(isset($_POST["Register"]))
		{
			$FName=$_POST["FName"];
			$MName=$_POST["MName"];
			$LName=$_POST["LName"];
			$UserName=$_POST["UserName"];
			$jobname=$_POST["job_name"];
			$Email=$_POST["Email"];
			$Phone=$_POST["Phone"];
			$CNIC=$_POST["CNIC"];
			$Address=$_POST["Address"];
			$Password=$_POST["Password"];
			$date= date('Y-m-d H:i:s');	
			$status="free";

			$query1="SELECT * FROM worker where worker_name='$UserName'";
			 $result1=mysqli_query($connection, $query1);
			
			 $query2="SELECT * FROM worker where email='$Email'";
			 $result2=mysqli_query($connection, $query2);

			 $query3="SELECT * FROM job_domain where Job_name='$jobname'";
			 $result3=mysqli_query($connection, $query3);

			 if(mysqli_num_rows($result1)>0)
			 {
			 	echo "Sorry.. Username Already Taken : ";
			 }
			 else if(mysqli_num_rows($result2)>0)
			 {
			 	echo "Sorry.. Email Already Registered : ";
			 }
			 else if(mysqli_num_rows($result3)==0)
			 {
			 	echo "Sorry.. No such Job Registered : ";
			 }
			 else
			 {	
					$query="INSERT INTO worker (worker_name,f_name,m_name,l_name,email,PhoneNo,cnic,address,password,start_date,Job_name,status) 
						VALUES ('$UserName','$FName','$MName','$LName','$Email','$Phone','$CNIC','$Address','$Password','$date','$jobname','$status')"; 
				$result=mysqli_query($connection, $query);
				if(mysqli_report($result))
				{
					echo "You have been Successfully Registered, You can Login now.";
					header('Location:http://localhost/HTPB/Login.php');
					exit;
				}	
			}
		}
		mysqli_close($connection);
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body bgcolor="grey">
<div style="background-color:purple">
      <h1 style="color: white; margin-left: 450px">HTPB | Worker Registeration </h1>
</div>
	<form action="w_register.php" method="POST" style="background-color: silver">
		<fieldset>
			<label for="FName"><b>Name : </b></label>
			<input type="text" placeholder="First Name" name="FName" required>
      		<input type="text" placeholder="Middle Name" name="MName">
      		<input type="text" placeholder="Last Name" name="LName">
      		<br><br>

      		<label for="UserName"><b>Worker Name : </b></label>
      		<input type="text" placeholder="Name786" name="UserName" required>
      		<br><br>

      		<label for="Job_name"><b>Job Name : </b></label>
      		<input type="text" placeholder="Job786" name="job_name" required>
      		<br><br>


      		<label for="Email"><b>Email : </b></label>
      		<input type="Email" placeholder="example@abc.com" name="Email" required>
      		<br><br>

      		<label for="CNIC"><b>CNIC : </b></label>
      		<input type="number" placeholder="xxxxxxxxxxxxx" name="CNIC" required>
      		<br><br>


      		<label for="Phone"><b>Phone number : </b></label>
      		<input type="number" placeholder="xxxxxxxxxxx" name="Phone" required>
      		<br><br>

			<label for="Password"><b>Password : </b></label>
      		<input type="Password" placeholder="Password" name="Password" required>
      		<br><br>

      		<label for="Address"><b>Address : </b></label>
      		<input type="Address" placeholder="Address" name="Address" required>
      		<br><br>

      		<button type="submit" style="width: 120px; height:26px; color: purple; background-color: silver; font-size: 20px; border-style: solid; border-color: purple" name="Register" value="Register">REGISTER</button>
      		

		</fieldset>
	</form>
	 <div class="container">
      	
    </div>



</body>
</html>