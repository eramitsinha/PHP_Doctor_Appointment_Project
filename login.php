<?php
class Login
{
	function signin($username,$password)
	{
		$con = mysqli_connect("localhost","root","","appu");
		$query = mysqli_query($con,"select * from admin where username='$username' and password='$password'");
		if(mysqli_num_rows($query)==0)
		{
			echo "<script>alert('Invalid Login');</script>";
		}
		else
		{
			session_start();
			$_SESSION['mysession']=$username;
			header("location:dashboard.php");
		}
	}
}

?>