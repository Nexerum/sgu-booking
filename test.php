<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	header("Content-type: text/plain; charset=utf-8");

	$host = 'localhost';

	$dbName = 'sgu';

	$username = 'root';

	$password = 'root';


	$dbCon = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);



	$sql = 'SELECT * FROM bookings';

	$stmt = $dbCon->prepare($sql);

	$stmt->execute();

	while ($row = $stmt->fetch()) 

	{

    	echo  $row[2] . " | " . $row[3] ."-". $row[4] . " | " . $row[5] . " | " . $row[6] . "<br/>";

	}

	  
?>

	<form>
		<input type="text" name="fName">
		<input type="text" name="lName">
		<input type="tel" name="tel">
		<input type="email" name="email">
		<input type="submit" name="submit">	
	</form>

<?php
	
	if ($_GET['fname'] != NULL){
		$sql = "INSERT INTO customer (fname, lname, tel, e-mail)
		VALUES('$_GET'['fName'], '$_GET'['lName'], '$_GET'['tel'], '$_GET'['email'])";
	}
 ?>

 
</body>
</html>