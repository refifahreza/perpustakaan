<?php
//------------------------------::::::::::::::::::::------------------------------\\
// Dibuat oleh Refi Fahreza \\
//------------------------------::::::::::::::::::::------------------------------\\
$server = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
