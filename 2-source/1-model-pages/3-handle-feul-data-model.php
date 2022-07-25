<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feul-management-system-database";

$vehicle_no_user = $_POST['vehicle_no'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM feul_data where vehicle_no = '$vehicle_no_user'";
$result = $conn -> query($sql);

$vehicle_no = "";
$date_of_received = "";


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

        $vehicle_no =  $row["vehicle_no"];
        $date_of_received = $row["date_of_received"];
    
    }
} 

if($vehicle_no != "" && $date_of_received != ""){

    $today = date("Y-m-d");
    
    $datetime1 = strtotime($today);
    $datetime2 = strtotime($date_of_received);

    $secs = $datetime1 - $datetime2;// == <seconds between the two times>
    $days = $secs / 86400;

    if($days >= 7){

        $today = date("Y-m-d");
    
        $sql = "UPDATE feul_data SET date_of_received = '$today' WHERE vehicle_no = '$vehicle_no'";
    
        if ($conn->query($sql) === TRUE) {
            header('Location: feul-success-page.php');
            die();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }else{

        $balance_days = 7 - $days;

        header("Location: feul-failed-page.php?days=$balance_days");


}


}else{

// Can get Insert

$today = date("Y-m-d");

$sql = "INSERT INTO feul_data VALUES ('', '$vehicle_no_user', '$today')";

if ($conn->query($sql) === TRUE) {
header('Location: feul-success-page.php');
die();
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

}




?>