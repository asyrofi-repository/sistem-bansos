<?php

    include("./koneksi.php");

    $id = $_GET['id'];
    $asal = $_POST['asal_bantuan'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal_terima'];
    $jumlah = $_POST['jumlah_penerima'];

    $query = "UPDATE `daftar_bantuan` SET `id_bantuan` = NULL, `asal_bantuan` = '$asal', `deskripsi` = '$deskripsi', `tanggal_terima` = '$tanggal', `jumlah_terima` = '$jumlah' WHERE `daftar_bantuan`.`id_bantuan` = '$id'";
    
    mysqli_query($koneksi, $query);

    header("Location:/uas/bantuan.php");

?>