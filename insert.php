<?php

include 'database.php';
	
	if (isset($_POST['submit'])) {
		$title = $_POST['title'];
		$desc = $_POST['description'];
		$date = date("Y-m-d h:i:sa");

		$sql = "INSERT INTO `list` (`id`, `title`, `description`, `user_id`, `date`) VALUES (NULL, '$title', '$desc', '01', '$date')";
		if (mysqli_query($conn, $sql)) {
		  header("Location: home.php");
		} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	else{
		echo "You can not access this page... Go back<a href='home.php'>back</a>";
	}


?>