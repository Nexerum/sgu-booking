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

	if($Name == NULL) {

	} 
	else {
	$sql = "INSERT INTO customers (Name, tel, email) VALUES ('$Name','$tel','$email')";
		if ($conn->query($sql) === TRUE) {
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	//$_POST['fName'] = array();
?>
 <?php //kayak insert
$servername = "localhost";
$username = "sec_sgu";
$password = "Abcd1234";
$dbname = "SGU";

	$type = $_POST{'type'};
	$model = $_POST['model'];
 	$color = $_POST['color'];
 	$material = $_POST['material'];

	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection

	if($model == NULL) {

	} 
	else {
	$sql = "INSERT INTO kayaks (type, model, color, material) VALUES ('$type','$model','$color','$material')";
		if ($conn->query($sql) === TRUE) {
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	//$_POST['fName'] = array();
?>