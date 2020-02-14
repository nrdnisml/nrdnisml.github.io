<?php 
    function luasLingkaran($r){
        if ($r%7 == 0) {
            $phi = 22/7;
        }else{
            $phi = 3.14;
    }
        $luas = $phi * $r * $r;
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
    <title>Luas Lingkaran</title>
</head>

<body class="container-fluid bg-dark">
    <div class="jumbotron">
        <h1 class="display-4">Hitung Luas Lingkaran</h1>
        <form class="form-inline" method="post">
            <div class="form-group mb-2">
                <label for="staticEmail2" class="sr-only">Jari - Jari</label>
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2"
                    value="Input nilai jari-jari">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="jariJari" class="sr-only">jari-jari</label>
                <input type="number" class="form-control" name="r" id="jariJari" placeholder="r(cm)">
            </div>
            <button type="submit" name="hitungL" class="btn btn-primary mb-2">Hitung</button><br>
        </form>

        <!-- HITUNG LUAS, FUNGSI luasLingkaran() -->
        <?php if(isset($_POST["r"])) : ?>
        <br>
        <h5>Luas Lingkaran = <?= luasLingkaran($_POST["r"])  ?></h5>
        <form class="form-inline" method="post">
            <div class="form-group mb-2">
                <label for="staticEmail" class="sr-only">Jari - Jari</label>
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Kembali ke Menu ?">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="menu" class="sr-only">Kembali ke Menu ?</label>
                <input type="text" class="form-control" name="menuL" id="menu" placeholder="Y/N">
            </div>
            <button type="submit" name="inputMenuL" class="btn btn-primary mb-2">Submit</button><br>
        </form>


        <?php endif; ?>

        <!-- KEMBALI KE MENU UTAMA FUNCTION menu() -->
        <?php if(isset($_POST["menuL"])) : ?>
        <?= menu($_POST["menuL"])."cm<sup>2</sup>";  ?>
        <?php endif; ?>


    </div>
</body>

</html>