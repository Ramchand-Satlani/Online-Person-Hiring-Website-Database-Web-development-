<?php 
		$connection=mysqli_connect("localhost","root","","htp");
		if(!$connection){
			error.mysqli_connect();
		}
		if(isset($_POST["Submit"]))
		{
			echo "lol";
		}
?>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
<fieldset>
<button type="submit" name="Submit" value="Submit">Submit</button>
</fieldset>
</form>
</body>
</html>