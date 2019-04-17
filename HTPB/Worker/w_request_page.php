<?php
	session_start();
	$connection=mysqli_connect("localhost","root","","htp");
	if(!$connection)
		error.mysqli_connect();
	$worker=$_SESSION["Worker_name"];
	
	$query="SELECT * FROM request where workerid='$worker' and rating = 0";
	$result=mysqli_query($connection,$query);

	$user="";
	if($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
		$user=$rows["userid"];
	}

	$query1="SELECT * FROM users 
			where UserName='$user'";
	$result1=mysqli_query($connection,$query1);

	if($rows1=mysqli_fetch_array($result1,MYSQLI_ASSOC))
	{
		echo "Name  :  ".$rows1["FName"]."<br>";
		echo "Contact Number  :  ".$rows1["Phone"]."<br>";
		echo "Location  :   ".$rows1["Address"]."<br>";
		exit;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Request Page</title>
</head>
<body bgcolor="silver">
</body>
</html>