<?php
$host = 'localhost'; // Nama hostnya
$username = 'root'; // Username
$password = ''; // Password (Isi jika menggunakan password)
$database = 'db_e_radiologi'; // Nama databasenya

// Koneksi ke MySQL dengan Mysqli
    $koneksi = mysqli_connect($host,$username,$password,$database) or die("Error " . mysqli_error($koneksi));
    //Format Tanggal dan Waktu
date_default_timezone_set("Asia/Jakarta");
?>