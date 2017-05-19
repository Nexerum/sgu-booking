<?php
$username = "sec_sgu";
$password = "Abcd1234";
$dbname = "SGU";


	$fname = $_POST['fName'];
 	$lname = $_POST['lName'];
 	$tel = $_POST['tel'];
 	$email = $_POST['email'];

	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_REQUEST[id]; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

mysqli_query($con,"DELETE FROM kayak WHERE id='".$id."'");
mysqli_close($con);
header("Location: kayaks.php");
?> 