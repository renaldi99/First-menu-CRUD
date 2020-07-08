<?php
$host       = "localhost";
$username   = "root";
$dbname     = "pendaftaran_mahasiswa";
$password   = "";

$connect = mysqli_connect($host, $username, $password, $dbname);

if( !$connect )
{
    die("Gagal terhubung dengan database " . mysqli_connect_error());
}
?>