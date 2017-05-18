<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SGU-bookings</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Bookings</a></li>
					<li><a href="customers.php">Customers</a></li>
					<li><a href="kayaks.php">Kayaks</a></li>
				</ul>
				
			</div>
			
		</nav>
	</header>

<?php include("script.php");?>
	  


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