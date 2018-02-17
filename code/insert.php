<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	 	<link rel="stylesheet" href="css/style.css">
	    <title>Check-In 5.2: Insert</title>
	</head>
	<body>

		<?php

		require "inc/conn.php";
		include "inc/nav.php";

		try {

			$query = "INSERT INTO hero (name) VALUES ('Batman')";
			$conn->exec($query);
			

			$queryInsert = "SELECT * FROM hero";
						foreach ($conn->query($queryInsert) as $hero) {
							echo "<h1>" . $hero['name'] . "</h1>";
							}
			}


		 catch (PDOException $e) {
		 	echo "Insert Failed: " . $e->getMessage();
		 	
		 	$conn = null;
		 	exit();
		}

		?>
	</body>
</html>