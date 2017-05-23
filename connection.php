<?php //booking insert
$servername = "localhost";
$username = "sec_sgu";
$password = "Abcd1234";
$dbname = "SGU";


	$Name = $_POST['Name'];
 	$tel = $_POST['tel'];
 	$email = $_POST['email'];

	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	$conn->set_charset("utf8");
?>