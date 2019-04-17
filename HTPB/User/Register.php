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
			$Email=$_POST["Email"];
			$DOB=$_POST["DOB"];
			$Phone=$_POST["Phone"];
			$CNIC=$_POST["CNIC"];
			$Address=$_POST["Address"];
			$Password=$_POST["Password"];		

			$query1="SELECT * FROM users where UserName='$UserName'";
			 $result1=mysqli_query($connection, $query1);
			
			 $query2="SELECT * FROM users where Email='$Email'";
			 $result2=mysqli_query($connection, $query2);
			 if(mysqli_num_rows($result1)>0)
			 {
			 	echo "Sorry.. Username Already Taken : ";
			 }
			 else if(mysqli_num_rows($result2)>0)
			 {
			 	echo "Sorry.. Email Already Registered : ";
			 }
			 else
			 {
			 				// $Password=md5($Password);	
			 	//$Password=md5($Password);
			 	$query="INSERT INTO users (UserName,FName,MName,LName,Email,DOB,Phone,CNIC,Address,Password) 
						VALUES ('$UserName','$FName','$MName','$LName','$Email','$DOB','$Phone','$CNIC','$Address','$Password')"; 
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
	<h1 style="color: white; margin-left: 430px">Welcome to Online HTPB | Registeration</h1>
</div>
	<form action="Register.php" method="POST" style="background-color:silver">
		<fieldset>
			<label for="FName"><b>Name : </b></label>
			<input type="text" placeholder="First Name" name="FName" required>
      		<input type="text" placeholder="Middle Name" name="MName">
      		<input type="text" placeholder="Last Name" name="LName">
      		<br><br>

      		<label for="UserName"><b>Username : </b></label>
      		<input type="text" placeholder="Name786" name="UserName" required>
      		<br><br>

      		<label for="Email"><b>Email : </b></label>
      		<input type="Email" placeholder="example@abc.com" name="Email" required>
      		<br><br>

      		<label for="CNIC"><b>CNIC : </b></label>
      		<input type="number" placeholder="xxxxxxxxxxxxx" name="CNIC" required>
      		<br><br>

      		<label for="DOB"><b>Date Of Birth : </b></label>
      		<input type="Date" placeholder="mm/dd/yyyy" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))
" name="DOB" required>
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

      		<button type="submit" style="width: 100px;  height:26px; color: purple; background-color: silver; border-style: solid;border-color: purple; font-size: 15px" name="Register" value="Register"><b>REGISTER</button>
      		

		</fieldset>
	</form>
	 <div class="container">
      	
    </div>



</body>
</html>