<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

	$host = 'localhost';

	$dbName = 'SGU';

	$username = 'sec_sgu';

	$password = 'Abcd1234';


	$dbCon = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);



	$sql = 'SELECT * FROM bookings';

	$stmt = $dbCon->prepare($sql);

	$stmt->execute();

	while ($row = $stmt->fetch()) 

	{

    	echo  $row[2] . " | " . $row[3] ."-". $row[4] . " | " . $row[5] . " | " . $row[6] . "<br/>";

	}
?>
	  


	<form action="index.php" method="post">

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
	if ($_GET['fName'] != NULL){
		$sql = "INSERT INTO customer (fName, lName, tel, email)
		VALUES('$_GET'['fName'], '$_GET'['lName'], '$_GET'['tel'], '$_GET'['email'])";
	}
?>

<?php
	$sql = "INSERT INTO customer (fName, lName, tel, email) VALUES
		('Cedrik','Svedblod','0324453972','cedrik.svedblod@gmail.com')"

?>

 
</body>
</html>