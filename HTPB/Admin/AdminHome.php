<?php
                  if(isset($_POST["Add_Job"]))
                  {
                        header('Location:Add_job_domain.php');
                              exit;
                  }
?>
<!DOCTYPE html>
<html>
<head>
	<title> HTPB | AdminPanel</title>
</head>
<body bgcolor="silver">	
<div style="background-color:purple">
      <h1 style="color: white; margin-left: 450px"> HTPB | Welcome to Online HTPB Admin </h1>
</div>
<form>
<fieldset>	
			<button type="submit" style="width: 200px; height:26px; color: purple; background-color: silver; font-size:18px; border-style: solid; border-color: purple" name="Add_Job" value="Add_Job"><a href="http://localhost/HTPB/Admin/Add_job_domain.php">Add Job Domain</a></button>
      		<br><br>
      		<button type="submit" style="width: 200px; height:26px; color: purple; background-color: silver; font-size:18px; border-style: solid; border-color: purple" name="Signin" value="Remove_Job"><a href="http://localhost/HTPB/Admin/remove_job_domain.php">Remove Job Domain</a></button>
      		<br><br>
      		<button type="submit" style="width: 200px; height:26px; color: purple; background-color: silver; font-size:18px; border-style: solid; border-color: purple" name="Signin" value="Signin"><a href="http://localhost/HTPB/Admin/Users.php">View User</a></button>
      		<br><br>
      		<button type="submit" style="width: 200px; height:26px; color: purple; background-color: silver; font-size:18px; border-style: solid; border-color: purple" name="Signin" value="Signin">View Busy Workers</button>
      		<br><br>
      		<button type="submit" style="width: 200px; height:26px; color: purple; background-color: silver; font-size:18px; border-style: solid; border-color: purple" name="Signin" value="Signin">View Free Workers</button>
      		<br><br>
      		<button type="submit" style="width: 200px; height:26px; color: purple; background-color: silver; font-size:18px; border-style: solid; border-color: purple" name="Signin" value="Signin">View Delete Workers</button>
   </fieldset>
      </form>	
</body>
</html>