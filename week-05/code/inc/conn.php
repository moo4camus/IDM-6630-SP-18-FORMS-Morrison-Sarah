<?php

$db = "week05";
$host = "172.21.0.2";
$un = "idm6630";
$pw = "idm6630";

try {
	$conn = new PDO("mysql:host=$host;dbname=$db", $un, $pw);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connected Successfully";
}

catch(PDOException $e) {
		echo "Connection Failed: " . $e->getMessage();
		exit();
}


?>