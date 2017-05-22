
<?php
$username = "sec_sgu";
$password = "Abcd1234";
$dbname = "SGU";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

mysqli_query($con,"DELETE FROM student WHERE id='".$id."'");
mysqli_close($con);
header("Location: kayaks.php");
?> 