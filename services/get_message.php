<?php
	include("../config_db.php");
	$token = isset($_POST["token"]) ? $_POST["token"] : "";
	$result = $conn->query("SELECT * FROM messages WHERE token = $token");
	echo $result->fetch_assoc();
?>