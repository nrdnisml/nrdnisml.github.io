<?php 
  function menu($menu){ 
    if($menu==1){
      header("Location: luasSegitiga.php");
      exit;
    }else if($menu==2){
      header("Location: luasLingkaran.php");
      exit;
    }elseif($menu==3){
      header("Location: luasPerPan.php");
      exit;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal2</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <style>

    </style>
</head>

<body class="container-fluid bg-dark">
    <div class="jumbotron tengah">
        <h1 class="display-4">Pilihan Menu</h1>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">1. Hitung Luas Segitiga</li>
            <li class="list-group-item">2. Hitung Luas Lingkaran</li>
            <li class="list-group-item">3. Hitung Luas Persegi Panjang</li>
        </ul>
        <hr class="my-4">
        <p>Inputkan angka pada menu untuk menghitung sesuai jenis bangun datar</p>

        <form action="" method="post" class="form-inline">
            <input type="text" class="form-group" placeholder="Input nomor menu disini" name="cek" id="">
            <button type="submit" name="cekMenu" class="btn-sm btn-primary form-group">Submit</button>
            <?php if(isset($_POST["cek"])) : ?>
            <?= menu($_POST["cek"]);  ?>
            <?php endif; ?>
        </form>
    </div>
</body>

</html>