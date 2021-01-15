<?php

include("./koneksi.php");

$id = $_GET['id'];
$query = "DELETE FROM `daftar_bantuan` WHERE `daftar_bantuan`.`id_bantuan` = '$id'";

mysqli_query($koneksi, $query);

header("Location:/uas/bantuan.php")

?>