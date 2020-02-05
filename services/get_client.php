<?php
	include("../config_db.php");
	
	$result = $conn->query("SELECT id, name, lastname FROM clients");

	$response = array();
	while($row = $result->fetch_assoc())
		$response[] = $row;
	
	echo json_encode($response);
?>