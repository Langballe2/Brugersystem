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

$sql = "
UPDATE
	bruger
SET
	navn = '".$_GET['ret_navn']."', 
WHERE
    email = '".$_GET['email']."'
";

if ($conn->query($sql) === TRUE) {
    echo "Brugeren er rettet";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>