<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
 	<link rel="stylesheet" href="css/style.css">
    <title>Check-In 5.2</title>
  </head>
	  <body>
		<?php

			require "inc/conn.php";
			include "inc/nav.php";

		try {

			$query = "SELECT * FROM hero ORDER BY id DESC";
			foreach ($conn->query($query) as $hero) {
				echo "<h1>" . $hero['name'] . "</h1>";

			}
			
		} catch (PDOException $e) {

			}

		?>
	</body>
</html>

