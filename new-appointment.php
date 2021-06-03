<?php
include "bootstrap.php";
include "menu.php";
?>
<h2>New Appointment</h2>
<form action="" method="post">
	<label>Patient Name</label>
	<input type="text" name="p1" class="Form-control">
	<br />
	<label>Email</label>
	<input type="text" name="e1" class="Form-control">
	<br />
	<label>Adhar No.</label>
	<input type="text" name="a1" class="Form-control">
	<br />
	<label>Date</label>
	<input type="date" name="d1" class="Form-control">
	<br />
	<label>Time</label>
	<input type="time" name="t1" class="Form-control">
	<br />
	<input type="submit" name="submit" class="btn btn-primary">
</form>
<?php
if($_POST)
{
	extract($_POST);
	$con = mysqli_connect("localhost","root","","appu");
	$query = mysqli_query($con,"insert into appointment values('','$p1','$e1','$a1','$d1','$t1')");
	echo "<script>alert('Appointment is Successful');</script>";
}

?>
</div>
</div>