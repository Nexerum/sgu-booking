<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	include('connect.php');
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	
	$sql = "SELECT * FROM bookings";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) 

			{

    			echo  $row["customerNr"] . " | " . $row["nrKayak"] ."-". $row["hireFrom"] . " | " . $row["hireTo"] . " | " . $row["price"] . "<br/>";
			}
		} else {
			echo "DIS AIN'T WORKING";
		};

		$conn->close();
?>
	  


	<form action="#" method="POST">

		<p>
			<label for="firstName">First name</label>
			<input type="text" name="fName">
		</p>

		<p>
			<label for="lastName"> Last name</label>
			<input type="text" name="lName">
		</p>

		<p>
			<label for="phoneNumber">Phone number</label>
			<input type="tel" name="tel">
		</p>

		<p>
			<label for="e-mail"> e-mail</label>
			<input type="email" name="email">
		</p>

		<input type="submit" name="submit">

	</form>




<?php

 // 	$fname = $_POST['fName'];
 // 	$lname = $_POST['lName'];
 // 	$tel = $_POST['tel'];
 // 	$email = $_POST['email'];


	// if($fname === NULL) {} else {
	// $sql = "INSERT INTO customer (fName, lName, tel, email) VALUES ('$fname','$lname','$tel','$email')";
	// 	if ($conn->query($sql) === TRUE) {
	//     echo "New record created successfully";
	// 	} else {
	// 	    echo "Error: " . $sql . "<br>" . $conn->error;
	// 	}
	// }
?>

<?php


		//$stmt = mysqli_prepare($sql);

		//$stmt->bind_param("sss", $_POST ['fName'], $_POST ['lName'], $_POST ['tel'], $_POST ['email']);

		//$stmt->execute();

?>

 
</body>
</html>