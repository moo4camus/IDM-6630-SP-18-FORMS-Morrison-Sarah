<?php
	require "inc/conn.php";
	
	try {
		
		$query = "DELETE FROM sites WHERE site_id = :site_id";

		$statement = $conn->prepare($query);
		$statement->bindParam(':site_id', $_REQUEST['site_id']);
		$statement->execute();
		
		header('Location: index.php');
	}

	catch (PDOException $e) {
	 	echo "Delete Failed: " . $e->getMessage();
	 	$conn = null;
	 	exit();
	}

		?>
