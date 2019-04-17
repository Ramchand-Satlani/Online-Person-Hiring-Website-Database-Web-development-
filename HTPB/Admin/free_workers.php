<!DOCTYPE html>
<html>
<head>
	<title>Free Workers</title>
</head>
<body bgcolor="silver">
<div style="background-color:purple">
      <h1 style="color: white; margin-left: 450px"> HTPB | Welcome to Online HTPB Admin </h1>
</div>

</body>
</html>
<?php
$connection=mysqli_connect("localhost","root","","htp");
		$st="free";
		if(!$connection)
			error.mysqli_connect();
		$query1="SELECT * FROM worker where status='$st'";
			 $result1=mysqli_query($connection, $query1);
			 while($rows=mysqli_fetch_array($result1,MYSQLI_ASSOC))
			 {
			 	echo "<br><br>";
			 	printf(" %s     :     %s    :     %s     :     %s     :     %s",$rows["f_name"],$rows["worker_name"],$rows["email"],$rows["address"],$rows["PhoneNo"],$rows["avg_rating"]);
  			 }
  			 
?>