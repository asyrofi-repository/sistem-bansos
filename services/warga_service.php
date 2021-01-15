<?php

function addWarga($nama, $rt, $rw, $desa, $penghasilan, $pekerjaan, $tanggungan, $tempat_tinggal){
    include("./koneksi.php");
    $query = "INSERT INTO `daftar_warga` (`id_warga`, `nama`, `rt`, `rw`, `desa`, `penghasilan`, `pekerjaan`, `tanggungan`, `tempat_tinggal`, `bantuan_diterima`, `nilai_kelayakan`) VALUES (NULL, '$nama', '$rt', '$rw', '$desa', '$penghasilan', '$pekerjaan', '$tanggungan', '$tempat_tinggal', '1', '0')";
    mysqli_query($koneksi, $query);
    header("Location:/uas/penerima.php");
}

function updateWarga($id, $nama, $rt, $rw, $desa, $penghasilan, $pekerjaan, $tanggungan, $tempat_tinggal){
    include("./koneksi.php");
    $query = "UPDATE `daftar_warga` SET  `nama` = '$nama', `rt` = '$rt', `rw` = '$rw', `desa` = '$desa', `penghasilan` = '$penghasilan', `pekerjaan` = '$pekerjaan', `tanggungan` = '$tanggungan', `tempat_tinggal` = '$tempat_tinggal' WHERE `daftar_warga`.`id_warga` = '$id'";
    mysqli_query($koneksi, $query);
    header("Location:/uas/penerima.php");
}

function deleteWarga($id){
    include("./koneksi.php");
    $query = "DELETE FROM `daftar_warga` WHERE `daftar_warga`.`id_warga` = '$id'";
    mysqli_query($koneksi, $query);
    header("Location:/uas/penerima.php");
}

$id = $_GET['id'];
$nama = $_POST['nama'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$desa = $_POST['desa'];
$penghasilan = $_POST['penghasilan'];
$pekerjaan = $_POST['pekerjaan'];
$tanggungan = $_POST['tanggungan'];
$tempat_tinggal = $_POST['tempat_tinggal'];

if($_GET['action'] == "add"){
    addWarga($nama, $rt, $rw, $desa, $penghasilan, $pekerjaan, $tanggungan, $tempat_tinggal);
}elseif($_GET['action'] == "update"){
    updateWarga($id, $nama, $rt, $rw, $desa, $penghasilan, $pekerjaan, $tanggungan, $tempat_tinggal);
}elseif ($_GET['action'] == "delete") {
    deleteWarga($id);
}

?>
