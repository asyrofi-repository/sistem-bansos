<?php
include("./services/loginservice.php");
include("./services/koneksi.php");
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
    <link rel="stylesheet" href="./assets/styles/datatables.min.css">
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
                <li class="nav-item active">
                    <a href="bantuan.php" class="nav-link">Daftar Bantuan</a>
                </li>
                <li class="nav-item">
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
                <?php
                $id = $_GET['id'];
                $results = mysqli_query($koneksi, "SELECT * FROM `daftar_bantuan` WHERE `id_bantuan` = '$id'");
                $result = mysqli_fetch_assoc($results);
                ?>
                <h2>Bantuan Sosial <?php echo $result['asal_bantuan'] ?></h2>
                <hr>
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-body">
                                <h4><strong>Asal Bantuan</strong></h4>
                                <p><?php echo $result['asal_bantuan'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-white bg-secondary mb-3">
                            <div class="card-body">
                                <h4><strong>Tanggal Penerimaan</strong></h4>
                                <p><?php echo $result['tanggal_terima'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body">
                                <h4><strong>Jumlah Bantuan</strong></h4>
                                <p><?php echo $result['jumlah_terima'] ?> Paket</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Daftar Penerima Bantuan</h2>
                <hr>
                <a href="services/olah_penerima.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary mb-5 <?php if($result['set_penerima'] == 1){echo "disabled";} ?>">Generate Data Penerima Bantuan</a>
                <table id="example" class="display table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">RT</th>
                            <th scope="col">RW</th>
                            <th scope="col">Desa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM daftar_penerima LEFT JOIN daftar_warga ON `daftar_penerima`.`warga` = `daftar_warga`.`id_warga`");
                            while($data = mysqli_fetch_assoc($query)){ ?>
                            
                            <tr>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['rt'] ?></td>
                                <td><?php echo $data['rw'] ?></td>
                                <td><?php echo $data['desa'] ?></td>
                            </tr>

                            <?php } ?>
                    </tbody>
                </table>
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
    <script src="./assets/scripts/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <!-- Service Script -->
    <script src="./services/loginservice.js"></script>
</body>

</html>