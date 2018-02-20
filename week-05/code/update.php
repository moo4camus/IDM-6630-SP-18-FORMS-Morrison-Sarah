<?php

	require "inc/conn.php";


	try {
		
		$query = "UPDATE sites SET site_url=:site_url, site_name=:site_name WHERE site_id=:site_id";

		$statement = $conn->prepare($query);
		$statement->bindParam(':site_url', $_REQUEST['site_url']);
		$statement->bindParam(':site_name', $_REQUEST['site_name']);
		$statement->bindParam(':site_id', $_REQUEST['site_id']);
		$statement->execute();

		
		header('Location: index.php');
			
		}
		
		catch (PDOException $e) {
	 	echo "Insert Failed: " . $e->getMessage();
	 	$conn = null;
	 	exit();
		}

?>
