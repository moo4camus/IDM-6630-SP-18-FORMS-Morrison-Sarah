<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
 	<link rel="stylesheet" href="css/style.css">
    <title>Check-In 5.2: Update</title>
  </head>
  <body>

	<?php

		require "inc/conn.php";
		include "inc/nav.php";

		try {
			$query = "UPDATE hero SET name='Bruce Wayne' WHERE name = 'Batman'";
			$conn->exec($query);

			$queryUpdate = "SELECT * FROM hero";
				foreach ($conn->query($queryUpdate) as $hero) {
					echo "<h2>" . $hero['name'] . "</h2>";
					}
			}
		
		catch (PDOException $e) {
		 	echo "Insert Failed: " . $e->getMessage();
		 	exit();
		}

		?>
	</body>
</html>