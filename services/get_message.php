<?php
	include("../config_db.php");
	$token = isset($_POST["token"]) ? $_POST["token"] : "";
	$result = $conn->query("SELECT message FROM messages WHERE token = $token");
	echo json_encode($result->fetch_assoc());
?>