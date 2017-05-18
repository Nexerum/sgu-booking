<?php //booking insert
$servername = "localhost";
$username = "sec_sgu";
$password = "Abcd1234";
$dbname = "SGU";


	$fname = $_POST['fName'];
 	$lname = $_POST['lName'];
 	$tel = $_POST['tel'];
 	$email = $_POST['email'];

	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection

	if($fname == NULL) {

	} 
	else {
	$sql = "INSERT INTO customer (fName, lName, tel, email) VALUES ('$fname','$lname','$tel','$email')";
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
	$sql = "INSERT INTO kayak (type, model, color, material) VALUES ('$type','$model','$color','$material')";
		if ($conn->query($sql) === TRUE) {
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	//$_POST['fName'] = array();
?>