<?php
include("config.php");

//kalu tidak ada id di query string
if(!isset($_GET['id']))
{
    header('Location: list-pendaftaran.php');
}

//ambil id dari query string
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql   = "SELECT * FROM calon_mahasiswa WHERE ID=$id";
$query = mysqli_query($connect, $sql);
$arra  = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style-form.css">
</head>

<body>
    <header>
        <h3>Form Edit | Pemrograman WEB</h2>
    </header>

    <div class="kotak_daftar">
    <form method="post" action="proses-edit.php">
    <input type="hidden" name="id" value="<?php echo $arra['id'] ?>" />
        <h4>Silahkan Isi</h4>
            <label>Nama Lengkap :</label>
            <input type="text" name="nama" class="form_isi" placeholder="Masukkan Nama Lengkap" value="<?php echo $arra['nama'] ?>">

            <label>Tempat Lahir :</label>
            <input type="text" name="tempatlahir" class="form_isi" placeholder="Masukkan Tempat Lahir" value="<?php echo $arra['tempatlahir'] ?>">

            <label>Tanggal Lahir :</label>
            <input type="date" name="tanggallahir" class="form_isi" value="<?php echo $arra['tanggallahir'] ?>">

            <label>Alamat :</label>
            <textarea name="alamat" class="form_isi" placeholder="Masukkan Alamat Lengkap"><?php echo $arra['alamat'] ?></textarea>

            <label>Jenis Kelamin :</label>
            <?php echo $arra['jeniskelamin'] ?>
            
            <br>
            <input type="checkbox" name="jeniskelamin" class="form_jnskelamin" value="Laki-laki<?php echo ($jeniskelamin == 'laki-laki') ? "checked": "" ?>">Laki - laki
            <input type="checkbox" name="jeniskelamin" class="form_jnskelamin" value="Perempuan<?php echo ($jeniskelamin == 'perempuan') ? "checked": "" ?>">Perempuan       
            <br>
    
            <label>Agama :</label>
            <?php $agama = $arra['agama'] ?>
            <select class="form_isi" name="agama">
                <option value="">--Pilih--</option>
                <option value="Kristen" <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option value="Katolik" <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
                <option value="Islam" <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option value="Buddha" <?php echo ($agama == 'Buddha') ? "selected": "" ?>>Buddha</option>
                <option value="Hindu" <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option value="Lainnya" <?php echo ($agama == 'Lainnya') ? "selected": "" ?>>Lainnya</option>
            </select>
        <button class="tombol_submit" type="submit" name="simpan">Simpan</button>
    </form>
    <form method="post" action="list-pendaftaran.php">
        <button type="submit" class="tombol_submit">Kembali</button>
    </form>
    </div>
</body>
</html>
