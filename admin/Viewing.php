<!DOCTYPE html>
<html>
	
<head>
	<title>
		Class Viewing Schedule
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='css/style.php' />
</head>

<body>
<img src="/Admin/png tup.png" width="50" height="50" title="Logo of schedule" alt="Logo of schedule " align="left" />
<br><br><br>
	<h5 style="color:red;font-size: 10px;">
	Technological University of the <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Philippines-Manila
	</h5>
	<p>
		HELLO!<br>
		SIR/MA'AM XXXXX
</p>
	<form method="post"style="text-align:center; align: top;">
		<input type="submit" name="button1"
				class="button" value="Instructor Schedule" />
		
		<input type="submit" name="button2"
				class="button" value="Room Assinged" />

        <input type="submit" name="button3"
				class="button" value="Class Schedule" />
	</form>
	<form action="php_checkbox.php" method="post">
	<form method="post">
		<input type="submit" name="button4"
				class="button" value="Create Schedule" />
	</form>
	<form action="php_checkbox.php" method="post">
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

    <?php
		if(array_key_exists('button1', $_POST)) {
			button1();
		}
		else if(array_key_exists('button2', $_POST)) {
			button2();
		}
        else if(array_key_exists('button3', $_POST)) {
			button3();
		}
		function button1() {
			echo "*link to instructor file*";
		}
		function button2() {
			echo "*link to rooms file*";
		}
        function button3() {
			echo "*link to view schedule file*";
		}
	?><br>
    <html>
<img src="/Admin/Codebased.png" width="1000" height="500" title="Logo of schedule" alt="Logo of schedule" />
</html>
</body>

</html>
