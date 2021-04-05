<?php
$connection = mysqli_connect('localhost', 'root', '1', 'loginapp');
if ($connection) {
    echo "Connected DB";
} else {
    die("DB connection failed.");
}
echo "<br>";
$query = "SELECT * from users";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("Query failed." . mysqli_error());
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="col-sm-6">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <pre style="background: lightblue">
        <?php
        print_r($row);
        ?>
        </pre>
            <?php
        }
        ?>
    </div>
</div>
</body>
</html>

