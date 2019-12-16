<?php
	include('../config_db.php');
	$num = isset($_POST["num"]) ?  $_POST["num"] : "";
	$user = isset($_POST["user"]) ?  $_POST["user"] : "";
	$content = isset($_POST["content"]) ?  $_POST["content"] : "";
	$result = $conn->query("INSERT INTO answers (num, user, content) VALUES ('$num','$user','$content')");
	if($result) echo json_encode(array( "status" => true));
	else echo json_encode(array( "status" => false));
?>