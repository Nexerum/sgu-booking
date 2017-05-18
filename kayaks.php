<!DOCTYPE html>
<html>
<head>
	<title>kayaks</title>
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

				
				$sql = "SELECT * FROM kayak";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) 

						{

			    			echo  $row["kayakNr"]." | ".$row["type"]." | ".$row["model"] . " | " . $row["material"] ."-". $row["color"] . "<br/>";
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
			<label for="type">Type</label>
			<input type="text" name="type">
		</p>

		<p>
			<label for="model">Model</label>
			<input type="text" name="model">
		</p>

		<p>
			<label for="color">Color</label>
			<input type="text" name="color">
		</p>

		<p>
			<label for="material">Material</label>
			<input type="tel" name="material">
		</p>

		<input type="submit" name="submit">

	</form>

</div>

</body>
</html>