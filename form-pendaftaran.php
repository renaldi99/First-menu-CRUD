<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style-form.css">
</head>

<body>
    <header>
        <h3>Form Pendaftaran | Pemrograman WEB</h2>
    </header>

    <div class="kotak_daftar">
    <form method="post" action="proses-pendaftaran.php">
        <h4>Silahkan Isi</h4>
            <label>Nama Lengkap :</label>
            <input type="text" name="nama" class="form_isi" placeholder="Masukkan Nama Lengkap">

            <label>Tempat Lahir :</label>
            <input type="text" name="tempatlahir" class="form_isi" placeholder="Masukkan Tempat Lahir">

            <label>Tanggal Lahir :</label>
            <input type="date" name="tanggallahir" class="form_isi" >

            <label>Alamat :</label>
            <textarea name="alamat" class="form_isi" placeholder="Masukkan Alamat Lengkap"></textarea>

            <label>Jenis Kelamin :</label>
            <br>
            <input type="checkbox" name="jeniskelamin" class="form_jnskelamin" value="Laki-laki">Laki - laki
            <input type="checkbox" name="jeniskelamin" class="form_jnskelamin" value="Perempuan">Perempuan
            
            <br>

            <label>Agama :</label>
            <select class="form_isi" name="agama">
                <option value="">--Pilih--</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Islam">Islam</option>
                <option value="Buddha">Buddha</option>
                <option value="Hindu">Hindu</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        <button class="tombol_submit" type="submit" name="daftar">Daftar</button>
    </form>
    <form method="post" action="index.php">
        <button type="submit" class="tombol_submit">Kembali</button>
    </form>
    </div>
</body>
</html>