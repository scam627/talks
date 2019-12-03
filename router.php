<?php
	session_start();
	if(isset($_SESSION["name"]))
		header("Location: ./index.php");
	else
		header("Location: ./inscription.php");
?>