<?php
include "bootstrap.php";
include "menu.php";
?>
<h2>My Appointments</h2>
<hr>
<?php
$con = mysqli_connect("localhost","root","","appu");
$query = mysqli_query($con,"select * from appointment ORDER BY id DESC");
?>
<table class="table table-bordered" border="2" width="100%">
	<Tr>
		<Th>Patient Name</Th>
		<Th>Email</Th>
		<Th>Adhar No.</Th>
		<th>Date</th>
		<Th>Time</Th>
		<th></th>
	</Tr>
	<?php
	while($k = mysqli_fetch_array($query))
	{
	?>
	<tr>
		<td><?php echo $k['patient_name']; ?></td>
		<td><?php echo $k['email']; ?></td>
		<td><?php echo $k['adhar']; ?></td>
		<td><?php echo $k['date']; ?></td>
		<td><?php echo $k['time']; ?></td>
		<td>
			<A href="delete.php?id=<?php echo $k['id']; ?>">Delete</A>
		</td>
	</tr>
	<?php
	}
	?>	
</table>
</div>
</div>