<?php

	$query = "SELECT * FROM sites ORDER BY site_id DESC";
		foreach ($conn->query($query) as $site) {
			echo "<ul>";
				echo "<li><h2>" . $site['site_name'] . "</h2></li>";
				echo "<li><h3><a href=" . $site['site_url'] . ">" . $site['site_url']. "</a></h3></li>";
				
				echo "<li>

					<form action='stage.php' method='post'>
						<input type='hidden' name='site_id' value='" . $site['site_id'] . "'/>
						<input type='submit' value='Edit'>
					</form></li>";

				echo "<li>	
					<form action='delete.php' method='post'>
						<input type='hidden' name='site_id' value='" . $site['site_id'] . "'/>
						<input type='submit' value='Delete'>
					</form>
					</li>";
			echo "</ul>";
		}

	?>