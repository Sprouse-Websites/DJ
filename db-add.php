<?php
session_start();
$page_name = "Data inserting";
include 'head.php';
?>

<body>

	<?php


	// Convert Long Strings
	$comments = htmlentities($_SESSION['comments']);


	// Create connection
	$conn = mysqli_connect(servername, username, password, dbname);

	// Check connection
	if ($conn->connect_error) {
		echo "Connection failed: " . $conn->connect_error;
	}


	$sql = "INSERT INTO `songs`(`Song`, `MainArtist`, `OtherArtist1`, `OtherArtist2`, `OtherArtist3`, `OtherArtist4`, `Album`, `Length`, `Genre`, `Version`, `Remixer`, `Explicit`, `YearReleased`, `DateReleased`, `DateBought`, `Comments`) VALUES ('{$_SESSION["song"]}', '{$_SESSION["artist"]}', '{$_SESSION["artist1"]}', '{$_SESSION["artist2"]}', '{$_SESSION["artist3"]}', '{$_SESSION["artist4"]}', '{$_SESSION["album"]}', '{$_SESSION["length"]}', '{$_SESSION["genre"]}', '{$_SESSION["version"]}', '{$_SESSION["remixer"]}', '{$_SESSION["explicit"]}', '{$_SESSION["yreleased"]}', '{$_SESSION["dreleased"]}', '{$_SESSION["bought"]}', '$comments')";


	if ($conn->query($sql) === TRUE) {
		echo "New song added successfully";
		header("location: done.php");
	}
	else {
		echo "Data Failed to insert. Error Code: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	?>

</body>
</html>
