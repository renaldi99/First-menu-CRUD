<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style-list.css">
</head>

<body>
    <header>
        <h3>List Daftar Mahasiswa</h3>
    </header>

    <nav>
        <a href="form-pendaftaran.php" class="link">[ + ] Tambah Data Baru</a>
    </nav>
    <br>
    
    <div class="table_list">
        <table cellspacing='0'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>

        <?php
        $sql   = "SELECT * FROM calon_mahasiswa";
        $query = mysqli_query($connect, $sql);

        /* arra itu varible yang dideklrasi untuk tempat dimana menyimpan 
        data array dari mysqli_fetch_array();*/
        $nomer = 0;
        while ($arra = mysqli_fetch_array($query))
        {
            echo "<tr>";
            $nomer++;

            echo "<th>".$nomer."</th>";
            echo "<th>".$arra['nama']."</th>";
            echo "<th>".$arra['tempatlahir']."</th>";
            echo "<th>".$arra['tanggallahir']."</th>";
            echo "<th>".$arra['alamat']."</th>";
            echo "<th>".$arra['jeniskelamin']."</th>";
            echo "<th>".$arra['agama']."</th>";

            echo "<th>";
            echo "<a href='form-edit.php?id=".$arra['id']."'>Edit</a> | ";
            echo "<a href='delete.php?id=".$arra['id']."'>Delete</a>";
            echo "</th>";
            
            echo "</tr>";
        }
        ?>
        </body>
        </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <form method="post" action="index.php">
        <button type="submit" class="back">Kembali</button>
    </form>
</body>
</html>
