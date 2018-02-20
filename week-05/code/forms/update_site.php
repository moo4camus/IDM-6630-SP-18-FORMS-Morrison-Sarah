<form action="update.php" method="post">
	<input type="text" name="site_name" value="<?php echo $site_to_update['site_name'] ?>">
	<input type="text" name="site_url" value="<?php echo $site_to_update['site_url'] ?>">
	<input type="hidden" name="site_id" value="<?php echo $site_to_update['site_id'] ?>">
	<input type="submit" value="Update Site">
</form>	
