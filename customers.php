<!DOCTYPE html>
<html>
<head>
	<title>customers</title>
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
			<div class="boxColumn1">
				<?php
						include('connection.php');
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						}

						

						$sql = "SELECT * FROM customers";

						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) 

								{
					    			echo $row["customerNr"]."<br>";
					    		} 
					    	}else {
					    		echo "DIS AIN'T WORKING";
					    	};

					    	$conn->close();
					    ?>
			</div>
			<div class="boxColumn2">
				<?php
						include('connection.php');
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						}

						

						$sql = "SELECT * FROM customers";

						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) 

								{
					    			echo $row["Name"]."<br>";
					    		} 
					    	}else {
					    		echo "DIS AIN'T WORKING";
					    	};

					    	$conn->close();
					    ?>
			</div>
			<div class="boxColumn3">
				<?php
						include('connection.php');
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						}

						

						$sql = "SELECT * FROM customers";

						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) 

								{
					    			echo $row["tel"]."<br>";
					    		} 
					    	}else {
					    		echo "DIS AIN'T WORKING";
					    	};

					    	$conn->close();
					    ?>
			</div>
			<div class="boxColumn4">
				<?php
						include('connection.php');
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						}

						

						$sql = "SELECT * FROM customers";

						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) 

								{
					    			echo $row["email"]."<br>";
					    		} 
					    	}else {
					    		echo "DIS AIN'T WORKING";
					    	};

					    	$conn->close();
					    ?>
			</div>
			<!-- <?php
						/*include('connect.php');
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						}

						

						$sql = "SELECT * FROM customers";

						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) 

								{
					    			echo $row["customerNr"]." | " . $row["Name"]. " | " . $row["tel"]. " | " . $row["email"] . "<br/>";
								}
							} else {
								echo "DIS AIN'T WORKING";
							};

							$conn->close();/*/
					?> -->
		</div>
	</div>

	<form action="delete-customer.php" method="GET">
		<p>
			<label for="delete">Delete</label>
			<input type="text" name="delete">
		</p>

		<p>
			<input type="submit" name="submit">
		</p>
	</form>

</div>

</body>

</html>