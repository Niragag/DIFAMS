<!DOCTYPE html>
<html>
	<head>
		<title>Creating Profile</title>
		<link rel="stylesheet" href="addemplo.css">
	</head>
	<body>
		<div class="banner">
			<div class="left">Hello, Admin User</div>
			<div class="right"><a href="#">Sign out</a></div>
		</div>
		<!-- new line -->
		<form action="/action_page.php">
		<div class="leftcontainer">
			<h1>Register</h1>
			<p>Please fill in this form to create an account.</p>
			<hr>
			<div class="fourvLine">
				<label for="username"><b><br>Username</b></label><br>
				<input type="text" placeholder="Enter Username" name="username" id="username" required>
				<label for="workemail"><b><br>Work Email </b></label><br>
				<input type="text" placeholder="Enter Phinma Email" name="workemail" id="workemail" required>
				<label for="phone-number"><b><br>School Phone Number</b></label><br>
				<input type="text" placeholder="Enter Phinma SchoolNumber" name="phone-number" id="phone-number" required>
				<br>
				<hr>
				<button type="submit" class="registerbtn">Register</button>
			</div>
		</div>
		<!-- Division -->
		<div class="onevLine">
			<label for="main"><b><br>Email Address</b></label><br>
			<input type="text" placeholder="Enter Main Email" name="main" id="main" required>
			<label for="status"><b><br>Status</b></label><br>
			<input type="text" placeholder="Enter Status" name="status" id="status" required>
			<label for="employee-id"><b><br>Employee ID</b></label><br>
			<input type="text" placeholder="Enter Employee Id" name="employee-id" id="employee-id" required>
		</div>
		<!-- Division -->
		<div class="twovLine">
			<label for="department"><b><br>Department</b></label><br><br>
			<input type="radio" name="department" value="cite">Cite
			<input type="radio" name="department" value="cahs">Cahs
			<input type="radio" name="department" value="cas">Cas
			<br><br>
			<label for="designation"><b><br>Designation</b></label><br><br>
			<input type="radio" name="instructor" value="instructor">Instructor
			<input type="radio" name="designation" value="staff">Staff
			<input type="radio" name="designation" value="dean">Dean
			<br><br><br>
			<label for="gender"><b>Gender</b><br><br></label>
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="other">Other
		</div>
		<!-- DIVISION -->
		<div class="threevLine">
			<label for="bg"><b><br>Blood Group</b></label><br>
			<input type="text" placeholder="Enter Blood Group" name="bg" id="bg" required>
			<label for="vaccination"><b><br>Vacinnated</b></label><br>
			<input type="text" placeholder="Enter Vacinnation" name="vaccination" id="vaccination" required>
			<br>
			<label for="fullname"><b>Full Name</b></label><br>
			<input type="text" placeholder="Enter Fullname" name="fullname" id="fullname" required>
		</div>
	</body>
</html>
