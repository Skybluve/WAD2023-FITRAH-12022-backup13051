<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost";
$username = "root";
$password = "";
$database = "db_wad_modul4";

$db = mysqli_connect($host, $username, $password, $database);


// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}


// 
 
?>