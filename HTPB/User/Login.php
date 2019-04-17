<?php 
		$connection=mysqli_connect("localhost","root","","htp");
		if(!$connection)
			error.mysqli_connect();
		if(isset($_POST["Signin"]))
		{
			echo "maha chutiya";
			$UserName=$_POST["UserName"];
			$Password=$_POST["Password"];	
			//$Password=md5($Password);	
			$query1="SELECT * FROM users where UserName='$UserName' and Password ='$Password'";
			 $result1=mysqli_query($connection, $query1);
			
			 if($rows=mysqli_fetch_array($result1,MYSQLI_ASSOC))
			 {
			 	printf("Welcome %s ",$rows["FName"]);
			 	//header('Location:userhome.php');
			 	//exit;
  			 }
			 else
			 {
			 	echo "User doesnot Exists. ";
			 	echo "Register First.";
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
	<h1 style="color: white; margin-left: 450px">Welcome to Online HTPB User login</h1>
</div>
	<form action="Login.php" method="POST" style="background-color: silver">
		<fieldset>
			<label for="Username"><b>UserName : </b></label>
			<input type="text" placeholder="Name786" name="UserName" required>
      		<br><br>

			<label for="Password"><b>Password : </b></label>
      		<input type="Password" placeholder="Password" name="Password" required>
      		<br><br>
      		<button type="submit" style="color: white; background-color: black" name="Signin" value="Signin">SignIn as User</button>
      		<br><br>

      		<button type="submit" style="color: white; background-color: black" name="Signin_Worker" value="Signin_Worker">SignIn as Worker</button>
     		<br><br>
      		<button type="submit" style="width: 100px; color: black; background-color: black" name="Signup" value="Signup">
      		<a href="http://localhost/HTPB/User/Register.php" style="color: white; background-color: black">SignUp</a>
      		</button>
      	</fieldset>
	 </form>		 
</body>
</html>