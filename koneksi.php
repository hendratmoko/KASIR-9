<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_databse = "kasir";

$db = mysqli_connect($server, $user, $password, $nama_databse);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}