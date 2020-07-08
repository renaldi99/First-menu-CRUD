<?php

include("config.php");

if(isset($_POST['daftar']))
{
    //ambil data dari formulir
    $nama         = $_POST['nama'];
    $tempatlahir  = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $alamat       = $_POST['alamat'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $agama        = $_POST['agama'];

    //buat querynya
    $sql = "INSERT INTO calon_mahasiswa (nama, tempatlahir, tanggallahir, alamat, jeniskelamin, agama) 
            VALUES ('$nama', '$tempatlahir', '$tanggallahir', '$alamat', '$jeniskelamin', '$agama')";
    $query = mysqli_query($connect, $sql);

    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
}
else {
    die("Gagal Mengakses ...");
}
?>