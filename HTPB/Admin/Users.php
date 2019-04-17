<!DOCTYPE html>
<html>
<head>
	<title>Users detail</title>
</head>
<body bgcolor="silver">
<div style="background-color:purple">
      <h1 style="color: white; margin-left: 450px"> HTPB | Welcome to Online HTPB Admin </h1>
</div>
<form>
	<fieldset>
		<label><b>First Name</label>
		<label><b>User Name</label>
		<label><b>Email</label>
		<label><b>Address</label>
		<label><b>Contact No</label>


	</fieldset>


</form>
</body>
</html>
<?php
$connection=mysqli_connect("localhost","root","","htp");
		if(!$connection)
			error.mysqli_connect();
		$query1="SELECT * FROM users where 1";
			 $result1=mysqli_query($connection, $query1);
			 while($rows=mysqli_fetch_array($result1,MYSQLI_ASSOC))
			 {
			 	echo "<br><tr>";
			 	echo " <br>";
			 	printf("%s     :     %s    :     %s     :     %s     :     %s",
			 		$rows["FName"],$rows["UserName"],$rows["Email"],$rows["Address"],$rows["Phone"]);
  			 }
?>