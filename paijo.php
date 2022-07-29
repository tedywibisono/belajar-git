<?php
include "funcsions.php"
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studikasus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM gambar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["gambar2"]. "<br/>";
    }
}