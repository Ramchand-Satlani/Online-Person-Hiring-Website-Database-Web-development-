
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
	$user=$_SESSION["User_name"];
	
	$query="SELECT * FROM request where userid='$user'";
	$result=mysqli_query($connection,$query);
	
	$worker="";
	if($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
		$worker=$rows["workerid"];
	}

	$query1="SELECT * FROM worker 
			where worker_name='$worker'";
	$result1=mysqli_query($connection,$query1);

	if($rows1=mysqli_fetch_array($result1,MYSQLI_ASSOC))
	{
		echo "Worker Name  :  ".$rows1["f_name"]."<br>";
	}

	$j_name="";
	$avg_rate="";
	$hours_worked="";
	$e_users="";
	$j_name="";

	if(isset($_POST["Submit"]))
	{
		$hours=$_POST["hour"];
		$rating=$_POST["rating"];

		$query2="SELECT * FROM worker where worker_name='$worker'";
		$result2=mysqli_query($connection, $query1);
			
		if($rows2=mysqli_fetch_array($result2,MYSQLI_ASSOC))
		{
		 	$avg_rate=$rows2["avg_rating"];
		 	$hours_worked=$rows2["hours_worked"];
		 	$e_users=$rows2["entr_users"];
		 	$j_name=$rows2["Job_name"];
		}

		$avg_rate=((float)$avg_rate*(float)$e_users+(float)$rating)/((float)$e_users+1);
		$e_users=(int)$e_users+1;
		$hours_worked=((int)$hours+(int)$hours_worked);

		$query3="SELECT * FROM job_domain where Job_name='$j_name'";
		$result3=mysqli_query($connection, $query3);
			
		$hourly_rate="";
		if($rows3=mysqli_fetch_array($result3,MYSQLI_ASSOC))
		{
			$hourly_rate=$rows3["hourly_rate"];
		}
		$salary=((int)$hours_worked*(int)$hourly_rate);

		$query4="UPDATE worker 
				set status='free',salery='$salary',hours_worked='$hours_worked',entr_users='$e_users',avg_rating='$avg_rate'		
				where worker_name='$worker'";
		$result4=mysqli_query($connection, $query4);
		
		$query5="DELETE from request 
				where workerid='$worker'";
		$result5=mysqli_query($connection, $query5);
		
		$query6="INSERT INTO Request_history (UserId,WorkerId,Rating,hour_worked)
				VALUES('$user','$worker',$hours,'$rating')";
				
		$result6=mysqli_query($connection, $query6);
		echo "Thankyou for you Feedback : ";
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
<form method="post" action="user_rate.php" style="background-color: silver">
<fieldset>
	<label><b>Rate the Worker out of 5</b></label>
	<input type="number" step="0.01" name="rating" placeholder="[1-5]">
	
	<label><b>Number of hours Worked</b></label>
	<input type="number" step="0.01" name="hour" placeholder="Hours">
	
	<button type="submit" style="width: 160px; height:26px; color: purple; background-color: silver; font-size:18px; border-style: solid; border-color: purple" name="Submit">Submit Feedback</button>
	<button type="submit" style="width: 120px; height:26px; color: purple; background-color: silver; font-size:18px; border-style: solid; border-color: purple" name="Log-Out">Log-Out</button>	
</fieldset>
</form>
</body>
</html>