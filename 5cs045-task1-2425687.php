<?php

    $mysqli = new mysqli ("localhost", "db2425687", "ManUnited123#", "db2425687");

	if ($mysqli -> connect_errno) {
	  die("Failed to connect to MySQL: ".$mysqli -> connect_error);
	  exit();
	}
	
	// echo ("Connection successful");
	
	$sql = "SELECT Car_name, Manufacturer, Price, Year_of_release FROM carss";
	
	$result = $mysqli->query($sql);
	
	if (!$result) {
		die('Data retrieval failed.');
		exit();
	}	
	// echo ("Data retrieval successful"); 
	
?> 	

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<title>Car Collection</title>

    <style>
        table {
			border collapse: collapse;
			width: 100%
		}
		
		th, td {
		    border: 1px solid black;
			padding: 8px
			text-align: left;
		}
		
		th {
			background-color: #eeeeee;
		}
		
	</style>
</head>

<body>
    <h1>Car Collection</h1>
	
	<table>
	    </thead>
		    <tr>
			    <th>Car name</th>
				<th>Manufacturer</th>
				<th>Price</th>
				<th>Year of release</th>
			</tr>
		</thead>
		
		<tbody>
		    <?php while ($a_row = mysqli_fetch_assoc($result)): ?>		
				<tr>
					<td><?= $a_row['Car_name']?> </td>
					<td><?= $a_row['Manufacturer'] ?> </td> 
					<td>&pound<?= $a_row['Price'] ?> </td>
					<<td><?= $a_row['Year_of_release'] ?></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
	
	<?php mysqli_free_result($result); ?>
</body>
</html> 