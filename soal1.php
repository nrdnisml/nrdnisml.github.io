<?php 
    $data = [
        ["0","Valentino Rossi","5678","16-02-1979","2","12500","Kontrak"],
        ["1","Cristiano Ronaldo","1234","05-02-1985","1","18000","Tetap"],
        ["2","Nico Erik Rosberg","4567","27-06-1985","1","11000","Kontrak"],
        ["3","Rio Haryanto","7890","22-01-1993","0","2500","Tetap"],
        ["4","Kobe Bryant","6789","23-08-1978","3","13500","Kontrak"],
        ["5","Maria Sharapova","3456","19-04-1986","0","5500","Tetap"],
        ["6","Ana Ivanovic","2345","12-03-1992","0","6500","Kontrak"],
    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <title>Soal1</title>
    <style>
    .cont {
        background-color: white;
        height: 900px;
        margin-top: 63px;
    }

    table {
        /* background-color: white; */
    }
    </style>
</head>

<body class="bg-dark">
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light fixed-top text-center">
        <h2 class="mx-auto">Data Pegawai</h2>
    </nav>

    <div class="container cont">

        <table class="table table-striped">
            <thead class="thead-dark">
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Tgl_lahir</th>
                <th>Jumlah_Anak</th>
                <th>Gaji</th>
                <th>Status</th>
            </thead>

            <?php foreach($data as $dt) :  ?>
            <tr scope="row">
                <td><?= $dt[0] ?></td>
                <td><?= $dt[1] ?></td>
                <td><?= $dt[2] ?></td>
                <td><?= $dt[3] ?></td>
                <td><?= $dt[4] ?></td>
                <td><?= $dt[5] ?></td>
                <td><?= $dt[6] ?></td>

            </tr>
            <?php endforeach; ?>

        </table><br><br>

        <h3 class="text-center">Menampilkan data sesuai permintaan soal </h3><br>


        <div class="container">
            <div class="row">
                <div class="col  text-right">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Tampilkan Data Array index 4
                    </button>

                    <!-- Modal Array-4 -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Data 4 (Nama, NIP, Gaji)</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-left">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Nama : <?= $data[4][1] ?></li>
                                        <li class="list-group-item">NIP : <?= $data[4][2] ?></li>
                                        <li class="list-group-item">Gaji : <?= $data[4][5] ?></li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#array6">
                        Tampilkan Data Array index 6
                    </button>

                    <!-- Modal Array-6 -->
                    <div class="modal fade" id="array6" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Data 6 (Nama,
                                        Tgl_lahir,Jumlah_Anak)</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Nama : <?= $data[6][1] ?></li>
                                        <li class="list-group-item">Tanggal Lahir : <?= $data[6][3] ?></li>
                                        <li class="list-group-item">Jumlah Anak : <?= $data[6][4] ?></li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>

</html>