<?php
		session_start();
		$connection=mysqli_connect("localhost","root","","htp");
		if(!$connection)
			error.mysqli_connect();
		
				if (isset($_POST["Log-Out"])) 
				{
					
					header('Location:http://localhost/HTPB/Login.php');
					exit;
				}
		$date="";
		if(isset($_POST["Submit"]))
		{

			date_default_timezone_set("Asia/Karachi");
			$current_time=time();
			$datetime=strftime("%H:%M:%S",$current_time);
			echo "Request Time"."<br>";
			echo $datetime;


			$d=$_POST["Domain_name1"];
			$query1="SELECT * FROM worker where Job_name='$d' and status='free'";
			$result1=mysqli_query($connection, $query1);
			 if($rows=mysqli_fetch_array($result1,MYSQLI_ASSOC))
			 {
			 	$worker_id=$rows["worker_name"];
			 	echo "<br>";
			 	echo "Worker Detail : ";
			 	echo "<br>Worker Name  :  ".$rows["f_name"];
			 	echo "<br>Contact Number  :  ".$rows["PhoneNo"];
			 	echo "<br>Average Ratings [1-5]  :  ".$rows["avg_rating"];
			 	echo "<br>Number of duties Performed  :  ".$rows["entr_users"];
  				
			 	$user_id=$_SESSION["User_name"];
			 	$date=$_SESSION["datetime"];
  				
  				$query2="INSERT INTO request(userid,workerid,request_time) 
  						VALUES('$user_id','$worker_id','$datetime')";
				$result2=mysqli_query($connection, $query2);

				$query3="UPDATE worker 
						set status = 'busy'
						where worker_name='$worker_id'";
				$result3=mysqli_query($connection, $query3);

  			 }
  			 else
  			 {
  			 	echo "<br>";
  			 	echo "No Free Worker found in requested domain";
  			 }
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="grey">
<div style="background-color:purple">
      <h1 style="color: white; margin-left: 450px"> HTPB | Welcome to Online HTPB Admin </h1>
</div>

<form method="post" action="request_worker.php" style="background-color: black">

<fieldset style="color: purple; background-color:silver">
	<label><b>Request the Domain</b></label>
	<input type="text" name="Domain_name1" placeholder="Domain type">
	<button type="submit" style="width: 120px; height:26px; color: purple; background-color: silver; font-size:18px; border-style: solid; border-color: purple" name="Submit">Request</button>
	<button type="submit" style="width: 120px; height:26px; color: purple; background-color: silver; font-size:18px; border-style: solid; border-color: purple" name="Log-Out">Log-Out</button>	
</fieldset>
</form>
</body>
</html>