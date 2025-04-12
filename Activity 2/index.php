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
$ID = "07";
$First_name = "Andrews";
$Email = "Salazar@rcc.edu.ph";
$Last_name = "Salazar";

$sql = "INSERT INTO customer (ID, First_name, Email, Last_name) VALUES ('$ID', '$First_name', '$Email', '$Last_name')";

if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>