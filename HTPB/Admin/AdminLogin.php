<?php 
		$connection=mysqli_connect("localhost","root","","htp");
		if(!$connection)
			error.mysqli_connect();
		if(isset($_POST["Signin"]))
		{
			$UserName=$_POST["UserName"];
			$Password=$_POST["Password"];		
			$query1="SELECT * FROM admin where AdminName='$UserName' and Password = '$Password'";
			 $result1=mysqli_query($connection, $query1);
			
			 if($rows=mysqli_fetch_array($result1,MYSQLI_ASSOC))
			 {
			 	printf("Welcome %s ",$rows["AdminName"]);
			 	header('Location:AdminHome.php');
					exit;
  			 }
			 else
			 {
			 	echo "incorect login. ";
			 }
		}
		mysqli_close($connection);
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body bgcolor="grey">
<div style="background-color:purple">
      <h1 style="color: white; margin-left: 450px"> HTPB | Welcome to Online HTPB Admin </h1>
</div>
	<form action="AdminLogin.php" method="POST" style="background-color: silver">
		<fieldset>
			<label for="Username"><b>Admin Name : </b></label>
			<input type="text" placeholder="Name786" name="UserName" required>
      		<br><br>

			<label for="Password"><b>Password : </b></label>
      		<input type="Password" placeholder="Password" name="Password" required>
      		<br><br>

      		<button type="submit" style="color: white; background-color: black" name="Signin" value="Signin">SignIn</button>
      		<br><br>
      		
		</fieldset>
	 
</form>

</body>
</html>