<?php
	include("../config_db.php");
	$name = isset($_POST["name"]) ?  $_POST["name"] : "";
	$lastname = isset($_POST["lastname"]) ?  $_POST["lastname"] : "";
	$phone = isset($_POST["phone"]) ?  $_POST["phone"] : "";
	$email = isset($_POST["email"]) ?  $_POST["email"] : "";
	
	$result = $conn->query("INSERT INTO clients (name, lastname, email, phone) VALUES ('$name','$lastname','$email','$phone')");
	if($result){
		session_start();
		$_SESSION["name"];
		header('Location: ./index.php');
	}
?>