<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost","root","","appu");
$query = mysqli_query($con,"DELETE FROM appointment where id='$id'");
header("location:dashboard.php");
?>