<?php
include("./services/loginservice.php");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/styles/style.css">

    <title>SPBS | BANTUAN</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <a class="navbar-brand" href="index.php"><strong>SPBS</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="bantuan.php" class="nav-link">Daftar Bantuan</a>
                </li>
                <li class="nav-item active">
                    <a href="penerima.php" class="nav-link">Daftar Penerima</a>
                </li>
            </ul>
            <a href="login.php?logout=true" class="btn btn-dark bg-dark-blue"> Logout &nbsp;<span class="fas fa-sign-in-alt"></span><span class="sr-only">(current)</span></a>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Container -->
    <div class="container-fluid">
        <div class="row box-info p-3">
            <div class="col">
                <h1>Tambah Calon Penerima</h1>
                <hr>

                <form method="POST" action="services/warga_service.php?action=add">
                    <div class="form-group">
                        <label for="nama">Nama Kepala Keluarga</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Sulaeman Darmanto" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="rt">RT</label>
                            <select id="rt" name="rt" class="form-control" required>
                                <option>RT 1</option>
                                <option>RT 2</option>
                                <option>RT 3</option>
                            </select>
                        </div>
                        <div class="form-group col-md">
                            <label for="rw">RW</label>
                            <select id="rw" name="rw" class="form-control" required>
                                <option>RW 1</option>
                                <option>RW 2</option>
                                <option>RW 3</option>
                            </select>
                        </div>
                        <div class="form-group col-md">
                            <label for="desa">Desa</label>
                            <select id="desa" name="desa" class="form-control" required>
                                <option>Desa Gandoang</option>
                                <option>Desa Mampir</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="pekerjaan">Jenis Pekerjaan</label>
                            <select id="pekerjaan" name="pekerjaan" class="form-control" required>
                                <option value="1">Karyawan Tetap</option>
                                <option value="2">Karyawan Kontrak</option>
                                <option value="3">Wirausaha</option>
                                <option value="4">Freelance</option>
                                <option value="5">Tidak Bekerja</option>
                            </select>
                        </div>
                        <div class="form-group col-md">
                            <label for="penghasilan">Penghasilan</label>
                            <select id="penghasilan" name="penghasilan" class="form-control" required>
                                <option value="1">Kurang dari Rp. 1.000.000</option>
                                <option value="2">Rp. 1.000.000 sampai Rp. 2.000.000</option>
                                <option value="3">Rp. 2.000.000 sampai Rp. 3.000.000</option>
                                <option value="4">Lebih dari Rp. 3.000.000</option>
                            </select>
                        </div>
                        <div class="form-group col-md">
                            <label for="tanggungan">Jumlah Tanggungan</label>
                            <input id="tanggungan" name="tanggungan" class="form-control" type="number" placeholder="4" required>
                        </div>
                        <div class="form-group col-md">
                            <label for="tempat_tinggal">Kondisi Tempat Tinggal</label>
                            <select id="tempat_tinggal" name="tempat_tinggal" class="form-control" required>
                                <option value="1">Layak</option>
                                <option value="2">Kurang Layak</option>
                                <option value="3">Tidak Layak</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>

            </div>
        </div>
    </div>
    <!-- End Container -->

    <!-- Footer -->
    <div class="container-fluid">
        <div class="row p-2 bg-dark-blue text-center">
            <div class="col">
                <span class="text-light">Muhammad Asyrofi &nbsp; &copy; &nbsp; 2020</span>
            </div>
        </div>
    </div>
    <!-- End Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./assets/scripts/jquery-3.5.1.min.js"></script>
    <script src="./assets/scripts/popper.min.js"></script>
    <script src="./assets/scripts/bootstrap.min.js"></script>
    <script src="./assets/scripts/all.js"></script>

    <!-- Service Script -->
    <script src="./services/loginservice.js"></script>
</body>

</html>