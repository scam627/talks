<?php
	include("../config_db.php");
	$message = isset($_POST["message"]) ? $_POST["message"] : "";
	$token = hash("sha256", $message);
	echo json_encode(array("token" => $token));
?>