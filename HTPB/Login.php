<?php 
		session_start();
		$connection=mysqli_connect("localhost","root","","htp");
		if(!$connection)
			error.mysqli_connect();
		if(isset($_POST["Signin_User"]))
		{
			$UserName=$_POST["UserName"];
			$Password=$_POST["Password"];	
			//$Password=md5($Password);	
			$query1="SELECT * FROM users where UserName='$UserName' and Password ='$Password'";
			 $result1=mysqli_query($connection, $query1);
			
			 if($rows=mysqli_fetch_array($result1,MYSQLI_ASSOC))
			 {
			 	$_SESSION['User_name'] = $UserName;
			 	header('Location: User/userhome.php');
			 	exit;
  			 }
			 else
			 {
			 	echo "User doesnot Exists. ";
			 	echo "Register First.";
			 }
		}

		if(isset($_POST["Signin_Worker"]))
		{
			$UserName=$_POST["UserName"];
			$Password=$_POST["Password"];	
			//$Password=md5($Password);	
			$query1="SELECT * FROM worker where worker_name='$UserName' and Password ='$Password'";
			 $result1=mysqli_query($connection, $query1);
			
			 if($rows=mysqli_fetch_array($result1,MYSQLI_ASSOC))
			 {
			 	$_SESSION['Worker_name'] = $UserName;
			 	header('Location: Worker/w_home.php');
			 	exit;
  			 }
			 else
			 {
			 	echo "Worker doesnot Exists. ";
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
	<h1 style="color: white;  margin-left: 450px">Welcome to Online HTPB | Login Panel</h1>
</div>
	<form action="Login.php" method="POST" style="background-color: silver">
		<fieldset>
			<label for="Username"><b>UserName : </b></label>
			<input type="text" placeholder="Name786" name="UserName" required>
      		<br><br>

			<label for="Password"><b>Password : </b></label>
      		<input type="Password" placeholder="Password" name="Password" required>
      		<br><br>
 
      		<button type="submit" style="width: 120px; height:40px; color: purple; background-color: silver; border-style: solid; border-color: purple" name="Signin_User" value="Signin_User">SignIn as User</button>

      		<button type="submit" style="width: 120px; height:40px; color: purple; background-color: silver; border-style: solid; border-color: purple" name="Signin_Worker" value="Signin_Worker">SignIn as Worker</button>
      		<br><br>

      		<button type="submit" style="width: 120px; height:40px; color: purple; background-color: silver; border-style: solid; border-color: purple" name="Signup" value="Signup">
      		<a href="http://localhost/HTPB/User/Register.php">SignUp As User</a>
      		</button>

      		<button type="submit" style="width: 120px; height:40px; color: purple; background-color: silver; border-style:solid; vertical-align: 7px; border-color: purple" name="Signup" value="Signup">
      		<a href="http://localhost/HTPB/Worker/w_register.php">SignUp As Worker</a>
      		</button>
      	</fieldset>
	 </form>	 
</body>
</html>