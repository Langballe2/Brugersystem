<?php
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO gruppe (navn)
VALUES 
	('".$_GET["name"]."')
	";

if ($conn->query($sql) === TRUE) {
    echo "Gruppe oprettet";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>