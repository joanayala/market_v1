<html>
	<head>
		<title>All users</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<table class="table" align="center">
			<thead class="thead-light">
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Email</th>
					<th>Photo</th>
				</tr>
			</thead>
	</body>
</html>

<?php
	include "database.php";
	$n=1;
	  $sql_users="SELECT * FROM usuarios";
	  $result=$conn->query($sql_users);

	  if($result->num_rows > 0){
		  while ($row = $result->fetch_assoc()) {
			  echo "<tr><td>".$row['firstname']."</td>";
			  echo "<td>".$row['lastname']."</td>";
			  echo "<td>".$row['email']."</td>";
			  echo "<td align='center'><img src=".$row['photo']." width=50></td></tr>";
		  }
		  echo "</table>";
	  }else{
		  echo "::: No hay usuarios registrados :::";
	  }
	  
?>