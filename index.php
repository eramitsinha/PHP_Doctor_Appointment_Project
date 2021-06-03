<?php include "bootstrap.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Appointment Management Portal</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<center>
	<div class="mydiv">
		<center><h1>Login</h1></center>
		<form action="" method="post">
			<label>Username :</label>
			<input type="text" name="username" class="form-control" required>
			<br />
			<label>Password : </label>
			<input type="password" name="password" class="form-control" required>
			<br />
			<input type="submit" name="submit" value="Login" class="btn btn-primary">
		</form>
		
		<?php
if($_POST)
{
	extract($_POST);
	include "login.php";
	$obj = new Login(); // class object
	$obj->signin($username,$password);
}
?>
	</div>
	<br />
	<div style="background: black; color:white; padding: 10px">	
		<center>
			&copy; 2021. Developed by : <strong>Ms. Apurva</strong> under guidance of <a href="https://www.urbanpro.com/lucknow/amit-sinha" target="_blank" style="color:yellow; font-weight: bold">Er Amit Sinha</a>
		</center>
	</div>
</center>
</body>
</html>

