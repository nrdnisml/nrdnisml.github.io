<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $email1 = $_POST["email1"];
    $countryCode = $_POST["countryCode"];
    $cityCode = $_POST["cityCode"];
    $phone = $_POST["phone"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $password = $_POST["password"];
    $password1 = $_POST["password1"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <style>
    .tengah {
        top: 100px;
    }
    </style>
</head>

<body class="container  bg-dark">
    <div class="card tengah">
        <div class="card-header">
            <h3>Data User</h3>

        </div>
        <div class="row align-items-center">
            <div class="col">
                <div class="card-body">
                    <div class="text-center">
                        <img src="img/c.png" alt="">
                    </div>
                    <!-- FORM INPUTAN -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Name : <?= $name ?></li>
                        <li class="list-group-item">Email : <?= $email ?></li>
                        <li class="list-group-item">Alternate Email : <?= $email1 ?></li>
                        <li class="list-group-item">Phone : <?= $countryCode.$cityCode.$phone ?></li>
                        <li class="list-group-item">Mobile : <?= $mobile ?></li>
                        <li class="list-group-item">Address : <?= $address ?></li>
                        <li class="list-group-item">Country : <?= $country ?></li>
                        <li class="list-group-item">Password : <?= $password ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>

</html>