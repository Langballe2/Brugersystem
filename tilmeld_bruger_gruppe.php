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

$sql = "
UPDATE bruger, gruppe
SET bruger.gruppe = '" . $_GET['tilmeld_gruppe'] . "'
WHERE bruger.email = '" . $_GET['email'] . "'
";

if ($conn->query($sql) === TRUE) {
    echo "Bruger tilmeldt til gruppen";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>