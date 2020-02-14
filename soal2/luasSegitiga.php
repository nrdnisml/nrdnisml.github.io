<?php 
    function luasSegitiga($alas, $tinggi){
        $luas = $alas * $tinggi / 2;
        return $luas;
    }

    function menu($menu){ 
        if($menu=="Y" || $menu=="y"){
            header("Location: index.php");
            exit;
        }else {
            exit;
        }
    }
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
    <title>Luas Segitiga</title>
</head>

<body class="container-fluid bg-dark">
    <div class="jumbotron">
        <h1 class="display-4">Hitung Luas Segitiga</h1>
        <br><br>
        <form action="" method="post">
            <div class="row">
                <div class="col form-group text-right">
                    <input type="number" name="alas" class="form-control" id="" placeholder="Nilai Alas (cm)" required>
                </div>
                <div class="col form-group">
                    <input type="number" name="tinggi" id="" class="form-control" placeholder="Nilai Tinggi (cm)"
                        required>
                </div>
                <div class="col form-group">
                    <button type="submit" name="hitungS" class="btn btn-primary mb-2">Hitung</button><br>
                </div>
            </div>
        </form>



        <!-- HITUNG LUAS, FUNGSI luasSegitiga() -->
        <?php if(isset($_POST["alas"]) && isset($_POST["tinggi"])) : ?>
        <br>
        <h5>Luas Segitiga = <?= luasSegitiga($_POST["alas"],$_POST["tinggi"])."cm<sup>2</sup>"  ?></h5>
        <form class="form-inline" method="post">
            <div class="form-group mb-2">
                <label for="staticEmail" class="sr-only">menu</label>
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Kembali ke Menu ?">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="menu" class="sr-only">Kembali ke Menu ?</label>
                <input type="text" class="form-control" name="menuS" id="menu" placeholder="Y/N">
            </div>
            <button type="submit" name="inputmenuS" class="btn btn-primary mb-2">Submit</button><br>
        </form>


        <?php endif; ?>

        <!-- KEMBALI KE MENU UTAMA FUNCTION menu() -->
        <?php if(isset($_POST["menuS"])) : ?>
        <?= menu($_POST["menuS"]);  ?>
        <?php endif; ?>


    </div>
</body>

</html>