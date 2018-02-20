<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
 	<link rel="stylesheet" href="css/style.css">
 	<style>
		@import url('https://fonts.googleapis.com/css?family=Quicksand:300');
	</style>
    <title>Site Saver</title>
	</head>
  	<body>
	  	<header>
	  		<h1>Site Saver</h1>
			</header>
			<?php

			require "inc/conn.php";

			$query = "SELECT * FROM sites WHERE site_id = " . $_REQUEST['site_id'];

			$site_to_update = $conn->query($query)->fetch();
				
			require "forms/update_site.php";
			require "site_list.php";
			
		?>
	</body>
</html>