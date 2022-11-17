<?php

include 'database.php';

if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$sql = "UPDATE `list` SET `complet` = '1' WHERE `list`.`id` = $id ";
	if (mysqli_query($conn , $sql)) {
		header("Location: home.php?complet-success"); 
	}

	else{
		echo "Error";
	}
}
?>