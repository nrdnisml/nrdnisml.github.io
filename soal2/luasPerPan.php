<?php 
    function luasPersegiPanjang($panjang, $lebar){
        $luas = $panjang * $lebar;
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
    <title>Luas persegi panjang</title>
</head>

<body class="container-fluid bg-dark">
    <div class="jumbotron">
        <h1 class="display-4">Hitung Luas persegi panjang</h1>
        <br><br>
        <form action="" method="post">
            <div class="row">
                <div class="col form-group text-right">
                    <input type="number" name="panjang" class="form-control" id="" placeholder="Nilai panjang (cm)"
                        required>
                </div>
                <div class="col form-group">
                    <input type="number" name="lebar" id="" class="form-control" placeholder="Nilai lebar (cm)"
                        required>
                </div>
                <div class="col form-group">
                    <button type="submit" name="hitungS" class="btn btn-primary mb-2">Hitung</button><br>
                </div>
            </div>
        </form>



        <!-- HITUNG LUAS, FUNGSI luaspersegi panjang() -->
        <?php if(isset($_POST["panjang"]) && isset($_POST["lebar"])) : ?>
        <br>
        <h5>Luas persegi panjang = <?= luasPersegiPanjang($_POST["panjang"],$_POST["lebar"])."cm<sup>2</sup>"  ?></h5>
        <form class="form-inline" method="post">
            <div class="form-group mb-2">
                <label for="staticEmail" class="sr-only">menu</label>
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Kembali ke Menu ?">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="menu" class="sr-only">Kembali ke Menu ?</label>
                <input type="text" class="form-control" name="menuP" id="menu" placeholder="Y/N">
            </div>
            <button type="submit" name="inputmenuP" class="btn btn-primary mb-2">Submit</button><br>
        </form>


        <?php endif; ?>

        <!-- KEMBALI KE MENU UTAMA FUNCTION menu() -->
        <?php if(isset($_POST["menuP"])) : ?>
        <?= menu($_POST["menuP"]);  ?>
        <?php endif; ?>


    </div>
</body>

</html>