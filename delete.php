<?php
include("config.php");

if (isset($_GET['id']))
{
    //ambil id dari query string
    $id = $_GET['id'];

    //buat query dihapus
    $sql   = "DELETE FROM calon_mahasiswa WHERE ID=$id";
    $query = mysqli_query($connect, $sql);
    
    if($query)
    {
        header('Location:list-pendaftaran.php');
    }
    else
    {
        die("Gagal Menghapus ...");
    }
} else{
    die("Gagal Mengakses ...");
}
?>