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
			echo "Tim Sug Min KUK";
		};

		$conn->close();
?>