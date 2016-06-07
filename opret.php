<?php
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO bruger (navn, kodeord, email)
VALUES (
	'".$_GET["name"]."',
	'".$_GET["kodeord"]."', 
	'".$_GET["email"]."'
	)";

if ($conn->query($sql) === TRUE) {
    echo "Bruger oprettet";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>