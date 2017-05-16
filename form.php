<?php
$servername = "localhost";
$username = "sec_sgu";
$password = "Abcd1234";
$dbname = "SGU";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO customer (fName, lName, tel, email)
VALUES ('John', 'Doe', '1234567890', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>