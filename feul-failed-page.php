<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container-fluid">

        <div class="mt-4 p-5 bg-danger text-white rounded">
            <h2 style="text-align:center;">Request is failed!</h2>
            <hr>

            <h3 style="text-align:center;">Note: You have already purchased the feul for this week, you can get feul
                after
                <?php echo $_GET['days']; ?> days.</h3>


            <div class="d-grid gap-2">
                <a href="index.php" class="btn btn-primary" type="button">Go to dashboard</a>
            </div>
        </div>

    </div>



    <script src="" async defer></script>
</body>

</html>