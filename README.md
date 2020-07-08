### Simple Menu CRUD PHP Mysql

1. buat sebuah database (bebas)\
*jika ingin mengikuti database sesuai file bisa menggunakan "pendaftaran_mahasiswa'\
*cara membuat database : create database "nama bebas";\

2. buat tabel (nama bebas)\
*jika ingin mengikuti nama tabel bisa menggunakan "calon_mahasiswa"\
*isi kolom tabel seperti ini :\
CREATE TABLE `nama_tabel` (\
`id` int(11) NOT NULL,\
`nama` varchar(50) NOT NULL,\
`tempatlahir` varchar(50) NOT NULL,\
`tanggallahir` date NOT NULL,\
`alamat` varchar(20) NOT NULL,\
`jeniskelamin` varchar(20) DEFAULT NULL,\
`agama` varchar(20) DEFAULT NULL\
);

3. masuk ke file config.php ubah bagian :\
$host       = "localhost";\
$username   = "root";\
$dbname     = "nama_database";\
$password   = ""; //defaultnya null, masukkan password jika ada.

*note : ubah di tiap file yang menggunakan nama tabel sesuaikan dengan nama tabel yang sudah dibuat.
