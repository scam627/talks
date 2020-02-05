<?php
	include("../config_db.php");
	$user = $_GET["user"];
	$result = $conn->query("SELECT num, content FROM answers WHERE user = $user");
	$response = array(0,0,0,0,0,0,0,0,0,0,0,0);
	while($row = $result->fetch_assoc())
		$response[$row["num"] - 1] = (int)$row["content"];
	echo json_encode($response);
?>