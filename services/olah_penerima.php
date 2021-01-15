<?php

function getBaseValue(){
    include("./koneksi.php");
    
    $query = mysqli_query($koneksi, "SELECT MIN(penghasilan) AS 'min_penghasilan', MAX(pekerjaan) AS 'max_pekerjaan', MAX(tanggungan) AS 'max_tanggungan', MAX(tempat_tinggal) AS 'max_tempat_tinggal', MIN(bantuan_diterima) AS 'min_bantuan_diterima' FROM daftar_warga");

    $query_result = mysqli_fetch_assoc($query);

    $result = array(
        "penghasilan" => $query_result['min_penghasilan'],
        "pekerjaan" => $query_result['max_pekerjaan'],
        "tanggungan" => $query_result['max_tanggungan'],
        "tempat_tinggal" => $query_result['max_tempat_tinggal'],
        "bantuan_diterima" => $query_result['min_bantuan_diterima']
    );
    return $result;

}

function hitungNilaiKelayakan(){
    include("./koneksi.php");
    $baseValue = getBaseValue();
    $query = mysqli_query($koneksi, "SELECT * FROM `daftar_warga`");
    while($data = mysqli_fetch_assoc($query)){
        $nilai = $baseValue['penghasilan'] / $data['penghasilan'] * 0.2 + $data['pekerjaan'] / $baseValue['pekerjaan'] * 0.2   + $data['tanggungan'] / $baseValue['tanggungan'] * 0.2 + $data['tempat_tinggal'] / $baseValue['tempat_tinggal'] * 0.2 + $baseValue['bantuan_diterima'] / $data['bantuan_diterima'] * 0.2;
        $query2 = mysqli_query($koneksi, "UPDATE `daftar_warga` SET `nilai_kelayakan` = '$nilai' WHERE `daftar_warga`.`id_warga` = '$data[id_warga]'");
    }
}

function getJumlahPaket(){
    include("./koneksi.php");
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT jumlah_terima FROM daftar_bantuan WHERE id_bantuan = '$id'");
    $query_result = mysqli_fetch_assoc($query);
    $result = $query_result['jumlah_terima'];
    return $result;

}

function setPenerima(){
    include("./koneksi.php");
    $id = $_GET['id'];
    $jumlah = getJumlahPaket();
    $query = mysqli_query($koneksi, "SELECT * FROM `daftar_warga` ORDER BY nilai_kelayakan DESC LIMIT $jumlah");
    while($data = mysqli_fetch_assoc($query)){
        $tambahBantuan = $data['bantuan_diterima'] + 1;
        mysqli_query($koneksi, "INSERT INTO `daftar_penerima` (`id_penerima`, `bantuan`, `warga`) VALUES (NULL, '$id', '$data[id_warga]')");
        mysqli_query($koneksi, "UPDATE `daftar_warga` SET `bantuan_diterima` = '$tambahBantuan' WHERE `daftar_warga`.`id_warga` = '$data[id_warga]'");
    }
    mysqli_query($koneksi, "UPDATE `daftar_bantuan` SET `set_penerima` = '1' WHERE `daftar_bantuan`.`id_bantuan` = $id;");
}

function olahPenerima(){
    hitungNilaiKelayakan();
    setPenerima();
    return true;
}

function resetData(){
    include("./koneksi.php");
    $baseValue = getBaseValue();
    $query = mysqli_query($koneksi, "SELECT * FROM `daftar_warga`");
    while($data = mysqli_fetch_assoc($query)){
        $query2 = mysqli_query($koneksi, "UPDATE `daftar_warga` SET `nilai_kelayakan` = '0', 	
        bantuan_diterima = '1' WHERE `daftar_warga`.`id_warga` = '$data[id_warga]'");
    }
    mysqli_query($koneksi, "UPDATE `daftar_bantuan` SET `set_penerima` = '0' WHERE `daftar_bantuan`.`id_bantuan` = $_GET[id];");
}

if(olahPenerima()){
    header("Location:/uas/detail_bantuan.php?id=".$_GET['id']);
}

if($_GET['reset']){
    resetData();
}

?>