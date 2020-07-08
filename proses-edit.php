<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan']))
{

    // ambil data dari formulir
    $id           = $_POST['id'];
    $nama         = $_POST['nama'];
    $tempatlahir  = $_POST['tempatlahir'];
    $tanggalahir  = $_POST['tanggallahir'];
    $alamat       = $_POST['alamat'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $agama        = $_POST['agama'];
    

    // buat query update
    $sql = "UPDATE calon_mahasiswa SET nama='$nama', tempatlahir='$tempatlahir', tanggallahir='$tanggalahir', 
            alamat='$alamat', jeniskelamin='$jeniskelamin', agama='$agama' WHERE ID=$id";

    $query = mysqli_query($connect, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-pendaftaran.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan ...");
    }

}else {
    die("Gagal Mengakses ...");
}
?>