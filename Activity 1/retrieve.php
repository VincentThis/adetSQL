<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "adetvincent";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
echo "ID: " . $row["ID"] . "<br>";
echo "Name: " . $row["First_name"] . "<br>";
echo "Email: " . $row["Email"] . "<br>";
echo "Email: " . $row["Last_name"] . "<br>";
echo "<br>";
}
} else {
echo "0 results";
}
?>