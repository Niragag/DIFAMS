<html>
	<head>
		<title>CAHS</title>
		<link rel="stylesheet" href="emplolist.css"
	</head>
	<body>
		<div class="header">
		<h1>Cahs Pre diko alam name e</h1>
		</div>
		<div class="container">
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
		$sql = "SELECT * FROM complaints WHERE department = 'CAHS' ";
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
	</body>
</html>
