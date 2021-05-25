<?php
	require_once "connexionDB.php";
	$name=$_POST['name'];
	
	$sql = "INSERT INTO `users`( `nom`) 
	VALUES ('$name')";
	if (mysqli_query($connection, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($connection);
?>