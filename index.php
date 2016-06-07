<html>
<head>
<title>Forside</title>
</head>
<body>

<h2>Opret bruger</h2>
<form action="opret.php" method="get">
Navn: <input type="text" name="name"><br>
Kodeord: <input type="password" name="kodeord"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<h2>Slet bruger</h2>
<form action="slet_bruger.php" method="get">
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form><br><br>

<h2>Opret gruppe</h2>
<form action="opret_gruppe.php" method="get">
Gruppenavn: <input type="text" name="name"><br>
<input type="submit">
</form>

<h2>Slet gruppe</h2>
<form action="slet_gruppe.php" method="get">
Gruppenavn: <input type="text" name="email"><br>
<input type="submit">
</form><br><br>

<h2>Tilføj bruger til gruppe</h2>
<form action="tilmeld_bruger_gruppe.php" method="get">
E-mail: <input type="text" name="email"><br>

Tilmeld til: 
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


$query = "SELECT navn FROM gruppe GROUP BY navn";
$result = mysqli_query($conn, $query);
echo "<select name='tilmeld_gruppe'>";
echo "<option value='0'>-Select-</option>";
while($row = mysqli_fetch_array($result)) {
    echo "<option value='".$row['navn']."'>".$row['navn']."</option>";
}
echo "</select>";


$conn->close();

?>
<br>
<input type="submit">
</form><br><br>

<h2>Fjern bruger fra gruppe</h2>
<form action="fjerngruppe.php" method="get">
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form><br><br>

<h2>Ret bruger</h2>
<form action="ret_bruger.php" method="get">
E-mail: <input type="text" name="email"><br>
<p>Hvad vil du rette?</p>
Ret navn: <input type="text" name="ret_navn"><br>
<input type="submit">
</form>
<br><br>
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

echo "<h2> Eksisterende Bruger: </h2>";
$query  = "SELECT `navn`, `email` FROM `bruger`";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
 
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "{$row['navn']}  -  {$row['email']}<br>";
	}
 
} else {
 
    echo "Query didn't return any result";
 
}

echo "<h2> Eksisterende Grupper: </h2>";
$query2  = "SELECT `navn` FROM `gruppe`";
$result2 = mysqli_query($conn, $query2);
if (mysqli_num_rows($result2) > 0) {
 
    while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
        echo "{$row2['navn']}<br>";
	}
 
} else {
 
    echo "Query didn't return any result";
 
}

$conn->close();

?>

</body>
</html>