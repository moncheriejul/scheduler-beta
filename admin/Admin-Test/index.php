<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
	
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		<img src="/Admin/png tup.png" width="50" height="50" title="Logo of schedule" alt="Logo of schedule " align="left" />
		<br><br><br>
			<a class="navbar-brand" href="http://www.tup.edu.ph/">Technological Universty <br> &nbsp;&nbsp; of the Philippines</a>
		</div>
	</nav>
	<button type="button" onclick="window.location.href='CreareSchedule.php';"><span class="glyphicon glyphicon-plus"></span>Create Schedule</button>
	</form>
	<form action="Time and Overview" method="post">
		<input type="submit" name="button5"
				class="button" value="Time" />
		<input type="submit" name="button6"
				class="button" value="Overview" /><br>
<label class="heading">My Section</label><br>
<input type="checkbox" name="check_list[]" value="Section 1"><label>BSCS-1C</label><br>
<input type="checkbox" name="check_list[]" value="Section 2"><label>BSIS-3B</label><br>
<input type="checkbox" name="check_list[]" value="Section 3"><label>BSCS-2A</label><br>
<input type="checkbox" name="check_list[]" value="Section 4"><label>BSIT-2A</label><br>
</form>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Welcome back!!</h3>
		<hr style="border: top;" text-align:center;/>
		<button type="button" onclick="window.location.href='InstructorSchedule.php';">Instructor Schedule</button>
		<button type="button"onclick="window.location.href='RoomAssigned.php';">Room Assigned</button>
		<button type="button" onclick="window.location.href='ClassSchedule.php';">Class Schedule</button>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Year</th>
					<th>Section</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'conn.php'; 
					
					$query = mysqli_query($conn, "SELECT * FROM `student`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $fetch['firstname']?></td>
					<td><?php echo $fetch['lastname']?></td>
					<td><?php echo $fetch['year']?></td>
					<td><?php echo $fetch['section']?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
			<tfoot>
				<tr>

					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tfoot>
		</table>
	</div>

<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>	
</html>