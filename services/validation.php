<?php
	include("../config_db.php");
	$email = isset($_POST["email"]) ?  $_POST["email"] : "";
	$token = isset($_POST["token"]) ?  $_POST["token"] : "";
	$result = $conn->query("SELECT * FROM clients WHERE email='$email'");
	$response = $result->fetch_assoc();
	$name = $response["name"];
	$user = $response["id"];
	if(isset($response["name"]) && $token == "iamhappy"){
		session_start();
		$_SESSION["name"] = $name;
		$_SESSION["user"] = $user; 
		header("Location: ../index.php");
	} else {
		session_destroy();
		header("Location: ../login.php");
	}
?>