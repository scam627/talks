<?php
	session_start();
	if(!isset($_SESSION["name"]))
		header("Location: ./inscription.php");
?>