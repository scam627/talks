<?php
	include("../config_db.php");
	$token = isset($_POST["token"]) ? $_POST["token"] : "";
	$result = $conn->query("SELECT * FROM messages WHERE token = '$token'");
	var_dump($result);
?>