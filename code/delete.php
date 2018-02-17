<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
 	<link rel="stylesheet" href="css/style.css">
    <title>Check-In 5.2: Delete</title>
  </head>
  	<body>
		<?php

			require "inc/conn.php";
			include "inc/nav.php";

			try {
				$query = "DELETE FROM hero WHERE name = 'Bruce Wayne'";
				$conn->exec($query);
				echo "<h1>[Identity Deleted]</h1>";
			}


			catch (PDOException $e) {
			 	echo "Insert Failed: " . $e->getMessage();
			 	exit();
			}
		?>
	</body>
</html>