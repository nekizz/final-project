<?php
	$id=$_GET["id"];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "starvel";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset('utf8');
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	if($id)
	{
	 $sql = "DELETE FROM khachsan where id_ks=$id";
	
    $result = $conn->query($sql);
	mysqli_close($conn);
	header("location:manage-hotel.php");
	exit();
	}
	?>