<?php
$servername = "localhost";
$username = "sec_sgu";
$password = "Abcd1234";
$dbname = "SGU";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo $delete;
if ($_GET["delete"] == null) {
	# code...
}
else {
	$delete = $_GET["delete"];
	$sql = "DELETE FROM `customers` WHERE customerNr = '$delete'";
	echo $delete;
	if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
	} else {
    echo "Error deleting record: " . $conn->error;
	}
}

header("Location: customers.php");
?> 