<?php
	$conn = mysqli_connect("localhost", "root", "1234", "freelancer");
	$conn->select_db("freelancer");
	$conn->set_charset("utf8");
?>