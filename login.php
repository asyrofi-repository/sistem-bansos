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

    <title>SPBS | HOME</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <a class="navbar-brand" href="index.php"><strong>SPBS</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <button class="btn btn-dark bg-dark-blue" data-toggle="modal" data-target="#exampleModal"> Login &nbsp;<span class="fas fa-sign-in-alt"></span><span class="sr-only">(current)</span></button>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Container -->
    <div class="container-fluid">
        <div class="row box-info align-items-center p-3">
            <div class="col-md">
                <img src="./assets/images/gift.svg" class="img-fluid" alt="">
            </div>
            <div class="col-md">
                <h1>
                    Sistem Pembagian <strong>Bantuan Sosial</strong> <br>
                    Pandemi Virus <strong>Covid-19</strong>
                </h1>
                <hr>
                <p class="text-justify">
                    Sistem ini merupakan <strong>Sistem Pembagian Bantuan Sosial</strong> untuk korban yang terdampak <strong>Pandemi Virus Covid-19</strong>. Sistem ini menggunakan metode algoritma <strong>Simple Additive Weight (SAW)</strong> sebagai dasar perhitungan untuk menentukan korban yang benar-benar layak menerima bantuan.
                </p>
                <button class="btn btn-lg btn-dark bg-dark-blue" data-toggle="modal" data-target="#exampleModal"> Mulai Pendataan Penerimaan Bantuan &nbsp;<span class="fas fa-arrow-right"></span><span class="sr-only">(current)</span></button>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-body bg-dark-blue text-light pb-0">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h2 class="text-center">LOGIN</h2>
                        </div>
                        <div class="col-12 bg-soft-blue text-dark py-4">

                            <!-- Form Login -->
                            <form id="loginform">
                                <div class="alert-box"></div>
                                <div class="form-group">
                                    <label for="username"><span class="fas fa-user"></span>&nbsp; Username</label>
                                    <input type="text" class="form-control" name="username" id="username" aria-describedby="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="password"><span class="fas fa-lock"></span>&nbsp;Password</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>
                                <div class="alert alert-info text-justify" role="alert">
                                    <span>Silahkan hubungi <strong>Admin</strong> jika tidak bisa login atau belum memiliki akun.</span>
                                </div>
                                <button type="submit" class="btn btn-block btn-dark bg-dark-blue submit">Login &nbsp;<span class="fas fa-arrow-right"></span></button>
                            </form>
                            <!-- End Form Login -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

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