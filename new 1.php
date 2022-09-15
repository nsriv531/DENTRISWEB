<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Document</title>
		<meta charset="UTF-8">
		<meta http=equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Nik Srivastava">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body style="margin: 50px;">
		<h1>DATA</h1>
		<br>
		<table class="table">
			<thead>
			<tr>
				<th>ID</th>
				<th>Website Name</th>
				<th>Username</th>
				<th>Password</th>
				<th>Password Expiry Date</th>
				<th>Reccuring Fields</th>
				<th>Exp Date</th>
				<th>Action</th>
			</tr>
			</thead>
		<tbody>
		
		<?php
		
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "test";
		
		$connection = new mysqli($servername, $username, $password, $database);
		
		if ($connection -> connect_error) {
			die("connection failed: " . $connection->connect_error);
			
		}
		
		$sql = "SELECT * FROM main_table";
		$result = $connection->query($sql);
		
		
		if (!$result) {
			
			die("Invalid query: " . $connection->error);
		}
		
		while ($row = $result->fetch_assoc()) {
			echo "<tr>
			<td>" . $row["ins_comp_name"] . "</td>
			<td>" . $row["website_name"] . "</td>
			<td>" . $row["uname"] . "</td>
			<td>" . $row["password"] . "</td>
			<td>" . $row["pw_expiray_date"] . "</td>
			<td>" . $row["reccuring_fields"] . "</td>
			<td>" . $row["exp_date"] . "</td>
			<td>
				<a class='btn btn-primary btn-sm' href='update'>Update</a>
				<a class='btn btn-primary btn-sm' href='delete'>Delete</a>
			</td>
			</tr>";
		}
		
		?>
		
		</tbody>
	</table>
	</body>
</html>
