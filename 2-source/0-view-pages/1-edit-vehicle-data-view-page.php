<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feul-management-system-database";


$auto_id = "";
$vehicle_no = "";
$vehicle_owner = "";
$licence_status = "";

$auto_id = $_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM vehicle_data WHERE auto_id=$auto_id";

$result = $conn -> query($sql);


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $auto_id =  $row["auto_id"];
      $vehicle_no =  $row["vehicle_number"];
      $vehicle_owner = $row["vehicle_owner_name"];
      $licence_status = $row["licence_renewal_status"];

    }
  } else {
    echo "0 results";
  }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fuel Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom:20px;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php">Home Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="register-view.php">Register Page</a>
                        </li>
                    </ul>
                </div>
            </nav>



            <div class="jumbotron">
                <form action='../1-model-pages/2-edit-vehicle-data-model.php?id=<?php echo $auto_id; ?>' method="POST">

                    <div class="row">
                        <div class="form-group col-md-4 col-sm-4" style="margin-bottom:20px;">
                            <label for="exampleInputEmail1">Vehicle No:</label>
                            <input type="text" value="<?php echo $vehicle_no;?>" class=" form-control" name="vehicle_no"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group col-md-4 col-sm-4" style="margin-bottom:20px;">
                            <label for="exampleInputEmail1">Vehicle Owner Name:</label>
                            <input type="text" value="<?php echo $vehicle_owner;?>" class=" form-control"
                                name="vehicle_owner" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group col-md-4 col-sm-4">
                            <label for="exampleSelect">Licence Renewal Status</label>
                            <select class="form-control" id="exampleSelect" name="licence_status">
                                <option>Valid</option>
                                <option>Expired</option>
                            </select>
                        </div>

                        <script>
                        window.onload = function() {

                            var data = "<?php echo $licence_status?>";
                            document.getElementById("exampleSelect").value = data;

                        }
                        </script>

                    </div>

                    <button type="submit" class="btn btn-primary col-md-2 col-sm-2">Update</button>

                </form>

            </div>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>