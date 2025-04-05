<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "adetvincent";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: ". $row["ID"]. " - Name: " . $row["Last_name"]. ", " . $row["First_name"]. "<br>" . "<br>" ;
    }
} else {
    echo "0 results";
}