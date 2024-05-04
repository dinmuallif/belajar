<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "dbdian";

$koneksi = mysqli_connect($server, $username, $password, $db);

if(!$koneksi) {
    echo "Koneksi gagal : " . mysqli_connect_error();
}