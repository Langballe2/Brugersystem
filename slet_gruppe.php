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

$sql = "DELETE FROM gruppe WHERE navn = '" . $_GET['name'] . "'";

if ($conn->query($sql) === TRUE) {
    echo "Gruppen er slettet";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>