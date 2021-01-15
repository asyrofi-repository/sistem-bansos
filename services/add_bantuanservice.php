<?php

function addBantuan(){
    include("./koneksi.php");

    $asal = $_POST['asal_bantuan'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal_terima'];
    $jumlah = $_POST['jumlah_penerima'];

    $query = "INSERT INTO `daftar_bantuan` (`id_bantuan`, `asal_bantuan`, `deskripsi`, `tanggal_terima`, `jumlah_terima`) VALUES (NULL, '$asal', '$deskripsi', '$tanggal', '$jumlah')";
    
    mysqli_query($koneksi, $query);

    header("Location:/uas/bantuan.php");
}


addBantuan();


?>