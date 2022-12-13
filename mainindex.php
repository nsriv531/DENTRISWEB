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
		<a class = "btn btn-primary" href='/dentrisweb/create.php' role="button">New Row</a>
		<br>
		<table class="table">
			<thead>
			<tr>
				<th>ins name</th>
				<th>Doctor</th>
				<th>Website Link</th>
				<th>Username</th>
				<th>Password</th>
				<th>no. of months</th>
				<th>in text</th>
				<th>next reset</th>
				<th>Eob</th>
				<th>Approval</th>
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
			<td>" . $row["doctor"] . " </td>
			<td><a href =" .$row["website_link"]. ">" .$row["website_link"]. "</a></td>
			<td>" . $row["username"] . "</td>
			<td>" . $row["password"] . "</td>
			<td>" . $row["pw_expiray_date"] . "</td>
			<td>" . $row["reccuring_fields"] . "</td>
			<td>" . $row["exp_date"] . "</td>
			<td>" . $row["website_linkk"] . "</td>
			<td>" . $row["eob"] . "</td>
			<td>" . $row["approval"] . "</td>
			<td>
				<a class='btn btn-primary btn-sm' href='update'>Update</a>
				<a class='btn btn-primary btn-sm' href='/dentrisweb/delete.php?id=".$row["ins_comp_name"]."' role='button'>Delete</a>
			</td>
			</tr>";
		}
		
		?>
		
		</tbody>
	</table>
	</body>
</html>
