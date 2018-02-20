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
		?>

		<div class="form">
			<?php
			require "forms/insert_site.php";
			?>
		</div>

		<div class="site_list">
			<?php
				require 'site_list.php';
			?>
		</div>
		
	
	</body>

</html>

