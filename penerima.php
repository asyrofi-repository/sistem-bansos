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
    <link rel="stylesheet" href="./assets/styles/datatables.min.css">
    <link rel="stylesheet" href="./assets/styles/style.css">

    <title>SPBS | PENERIMA</title>
</head>

<body>

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

    <div class="container-fluid">
        <div class="row box-info p-3">
            <div class="col">
                <h1>Daftar Penerima Bantuan <a href="./add_warga.php" class="btn btn-primary"><span class="fas fa-plus"></span> Tambah Penerima</a></h1>
                <hr>
                <table id="example" class="display table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Desa</th>
                            <th>Bantuan Diterima</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("./services/koneksi.php");
                        $query = "SELECT * FROM `daftar_warga`";
                        $results = mysqli_query($koneksi, $query);
                        while ($result = mysqli_fetch_assoc($results)) { ?>
                            <tr>
                                <td><?php echo $result['nama'] ?></td>
                                <td><?php echo $result['rt'] ?></td>
                                <td><?php echo $result['rw'] ?></td>
                                <td><?php echo $result['desa'] ?></td>
                                <td><?php echo $result['bantuan_diterima']-1 ?></td>
                                <td><a href="edit_warga.php?id=<?php echo $result['id_warga'] ?>" class="btn btn-primary"><span class="fas fa-edit"></span> Edit</a>
                                    <a href="services/warga_service.php?action=delete&id=<?php echo $result['id_warga'] ?>" class="btn btn-danger"><span class="fas fa-trash-alt"></span> Hapus</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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