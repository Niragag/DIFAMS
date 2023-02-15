<html>
	<head>
		<title>Employee List</title>
		<link rel="stylesheet" href="emplolist.css"
	</head>
	<body>

		<div class="headercontainer">
		<nav>
			<ul>
				<li><a href="#">Edit Employees</a></li>
				<li><a href="addemplo.php">Add Employees</a></li>
				<li><a href="#">Absenteesim Rate</a></li>
				<li><a href="#">Employee Productivity</a></li>
				<li><a href="#">Return</a></li>
			</ul>
		</nav>
		<!--Division-->
		<div class="headerdivision">
			<h1>Saint Jude College Phinma</h1>
			<h3>Employee List</h3>
		</div>
		</div>
		<div class="listcontainer">
	
		<table>
					
			<tr>

				<th>User ID</th>
				<th>Username</th>
				<th>Email</th>
				<th>Designation</th>
				<th>Department</th>

			</tr>
		<?php 
		$conn = mysqli_connect("localhost","gagarin","facebook.com","database");
		$sql = "SELECT * FROM complaints ";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["id"] . "</td><td><a href='#'>" .$row["username"] . "</a></td><td>" .$row["email"] . "</td><td>" .$row["designation"] . "</td><td>" .$row["department"] . "</td>";
				}
			}
			else {
					echo "No results";
				}
			$conn->close();
		?>
	
		</table>
		
	</div>
	<!-- footer -->
	<div class="footer">
			<p>Copyright 2023 @ SaintJudePhinma</p>
		</div>
	</body>
</html>
