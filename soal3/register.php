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
            <h3>Create Account</h3>
        </div>
        <div class="row align-items-center">
            <div class="col">
                <div class="card-body">
                    <h5 class="card-title">Regiter Here!</h5>
                    <!-- FORM INPUTAN -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                placeholder="your name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                placeholder="example@email.com" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="email1">Alternate Email address</label>
                            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp"
                                placeholder="example@email.com" name="email1">
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <label for="phone">Your Phone</label>
                                <input type="number" class="form-control" id="phone" aria-describedby="emailHelp"
                                    placeholder="country code" name="countryCode">
                            </div>
                            <div class="col">
                                <label for="phone"></label>
                                <input type="number" class="form-control" id="phone" aria-describedby="emailHelp"
                                    placeholder="city code" name="cityCode">
                            </div>
                            <div class="col">
                                <label for="phone"> </label>
                                <input type="number" class="form-control" id="phone" aria-describedby="emailHelp"
                                    placeholder="phone" name="phone">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="mobile">Mobile Phone</label>
                            <input type="number" class="form-control" id="mobile" aria-describedby="emailHelp"
                                placeholder="Phone Number" name="mobile">
                        </div>
                        <div class="form-group">
                            <label for="address">Your portal address</label>
                            <textarea name="address" id="address" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select class="form-control" id="country" name="country">
                                <option value="" selected="selected">---select one---</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Negro">Negro</option>
                                <option value="Bhutan">Bhutan</option>
                            </select>
                        </div>
                        <div class=" form-group">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" id="Password" name="password"
                                placeholder="Password" required>
                        </div>
                        <div class=" form-group">
                            <label for="Password1">Re-enter Password</label>
                            <input type="password" class="form-control" id="Password1" name="password1"
                                placeholder="Password" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">I Accept terms and conditions</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>


                        <!-- TAMPIL INPUTAN BY MODAL -->
                        <?php if (isset($_POST["submit"])) : ?>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning float-right" data-toggle="modal"
                            data-target="#exampleModalScrollable">
                            Tampilkan Data
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="text-center">
                                            <img src="img/c.png" alt="">
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <!-- INPUTAN TO VARIABLE -->
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
                                    <div class="modal-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Name : <?= $name ?></li>
                                            <li class="list-group-item">Email : <?= $email ?></li>
                                            <li class="list-group-item">Alternate Email : <?= $email1 ?></li>
                                            <li class="list-group-item">Phone : <?= $countryCode.$cityCode.$phone ?>
                                            </li>
                                            <li class="list-group-item">Mobile : <?= $mobile ?></li>
                                            <li class="list-group-item">Address : <?= $address ?></li>
                                            <li class="list-group-item">Country : <?= $country ?></li>
                                            <li class="list-group-item">Password : <?= $password ?></li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>