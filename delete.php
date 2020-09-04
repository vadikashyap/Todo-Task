<?php
include 'database.php';

if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$sql = "DELETE FROM `list` WHERE `list`.`id` = $id";
	if (mysqli_query($conn , $sql)) {
		header("Location: home.php?delete-success"); 
	}
	else{
		echo "Error";
	}

}

?>