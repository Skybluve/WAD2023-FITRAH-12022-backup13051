<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

$servername = "localhost";
$database = "db_wad_modul3";
$username = "root";
$password = "";
// Koneksi ke Database
$conn = mysqli_connect($servername, $username, $password, $database);

// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// 
?>