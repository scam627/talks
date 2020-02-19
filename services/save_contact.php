<?php
	include("../config_db.php");
	$name = isset($_POST["name"]) ?  $_POST["name"] : "";
	$phone = isset($_POST["phone"]) ?  $_POST["phone"] : "";
	$result = $conn->query("INSERT INTO contact (name, phone) VALUES ('$name','$phone')");
	$user = $conn->insert_id;
	header("Location: ../index.php");
?>