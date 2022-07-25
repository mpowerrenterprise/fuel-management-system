<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feul-management-system-database";

$auto_id = $_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "DELETE FROM vehicle_data WHERE auto_id=$auto_id";

if ($conn->query($sql) === TRUE) {
    header('Location: register-view.php');
} else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>