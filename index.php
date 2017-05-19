<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
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

<div class="col-md-10 col-md-offset-1">
	<div class="box">
		<div class="box-inside">
			<?php
				include('connect.php');
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				}

				
				$sql = "SELECT * FROM bookings, customers";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) 

						{

			    			echo  $row["Name"]." | ".$row["customerNr"] . " | " . $row["nrKayak"] ."-". $row["hireFrom"] . " | " . $row["hireTo"] . " | " . $row["price"] . "<br/>";
						}
					} else {
						echo "DIS AIN'T WORKING";
					};

					$conn->close();
			?>
		</div>
	</div>
	  

	<div class="col-md-10 form-group">
		<div class="col-md-2 customer-form">
			<form action="#" method="POST">

				<p>
					<label for="Name">First name</label>
					<input class="form-control" type="text" name="Name">
				</p>

				<p>
					<label for="phoneNumber">Phone number</label>
					<input class="form-control" type="tel" name="tel">
				</p>

				<p>
					<label for="e-mail"> e-mail</label>
					<input class="form-control" type="email" name="email">
				</p>

				<input type="submit" name="submit">

			</form>
		</div>
			<br/>
		<div class="col-md-2 col-md-offset-1 bookings-form">
			<form class="form-group">
				<p>
					<label for="Name">Name</label>
					<?php include("search.php");?>
				</p>

				<p>
					<label for="Amount of kayaks">How many kayaks?</label>
					<input class="form-control" type="text" name="Amount-of-kayaks">
				</p>

				<p>
					<label for="price">Price</label>
					<input class="form-control" type="price" name="price">
				</p>

				<p>
					<label for="payed">Is it payed?</label>	
					<input class="form-control" type="payed" name="payed">
				</p>

			</form>
		</div>
	</div>
</div>



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
=======
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
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

<div class="col-md-10 col-md-offset-1">
	<div class="box">
		<div class="box-inside">
			<?php
				include('connect.php');
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				}

				
				$sql = "SELECT * FROM bookings, customer";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) 

						{

			    			echo  $row["fName"]." | ".$row["lName"]." | ".$row["customerNr"] . " | " . $row["nrKayak"] ."-". $row["hireFrom"] . " | " . $row["hireTo"] . " | " . $row["price"] . "<br/>";
						}
					} else {
						echo "DIS AIN'T WORKING";
					};

					$conn->close();
			?>
		</div>
	</div>
	  


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
</div>




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
>>>>>>> origin/master
</html>