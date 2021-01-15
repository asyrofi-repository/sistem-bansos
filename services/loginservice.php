<?php

session_start();

function cekSession()
{
    $loginPage = "/uas/login.php";

    if (!isset($_SESSION['username'])) {
        if ($_SERVER['PHP_SELF'] != $loginPage) {
            header("Location: /uas/login.php");
        }
    } else {
        if ($_SERVER['PHP_SELF'] == $loginPage) {
            header("Location: /uas/bantuan.php");
        }
    }
}

function logIn()
{
    include("koneksi.php");

    header("Content-Type: application/json; charset=UTF-8");

    $response = array();

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT `password` FROM `daftar_user` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($koneksi, $query);
    $resultCount = mysqli_num_rows($result);

    if ($resultCount > 0) {
        $_SESSION['username'] = $username;
        $response['result'] = true;
    } else {
        $response['result'] = false;
    }
    return json_encode($response);
}

function logOut()
{
    session_destroy();
}

if (isset($_GET["trylogin"])) {
    echo (logIn());
} else if (isset($_GET["logout"])) {
    echo (logOut());
} else {
    cekSession();
}
