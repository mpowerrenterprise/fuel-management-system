<?php

$vehicle_no = $_POST['vehicle_no'];
$vehicle_owner = $_POST['vehicle_owner'];
$licence_status = $_POST['licence_status'];

// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feul-management-system-database";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO vehicle_data (auto_id, vehicle_number, vehicle_owner_name, licence_renewal_status)
VALUES ('', '$vehicle_no', '$vehicle_owner', '$licence_status')";

if ($conn->query($sql) === TRUE) {
  header('Location: register-view.php');
die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>