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
                <h1>Daftar Bantuan <a href="./add_bantuan.php" class="btn btn-primary"><span class="fas fa-plus"></span> Tambah Bantuan</a></h1>
                <hr>

                <?php
                    $results = mysqli_query($koneksi, "SELECT * FROM `daftar_bantuan` ORDER BY `id_bantuan` DESC");
                    
                    while($result = mysqli_fetch_assoc($results)){
                ?>

                <!-- Card -->
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/images/bantuan_item.jpg" class="card-img img-fluid" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Bantuan Sosial <?php echo $result['asal_bantuan']; ?></h5>
                                <p class="card-text"><?php echo $result['deskripsi']; ?></p>
                                <a href="detail_bantuan.php?id=<?php echo $result['id_bantuan'] ?>" class="btn btn-success"><span class="fas fa-search"></span> Lihat</a>
                                <a href="edit_bantuan.php?id=<?php echo $result['id_bantuan'] ?>" class="btn btn-primary"><span class="fas fa-edit"></span> Edit</a>
                                <a href="services/delete_bantuan.php?id=<?php echo $result['id_bantuan'] ?>" class="btn btn-danger <?php if($result['set_penerima'] == 1){echo "disabled";} ?>"><span class="fas fa-trash-alt"></span> Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <?php } ?>

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