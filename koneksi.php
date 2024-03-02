<?php
$host = "localhost"; // Ganti sesuai dengan host Anda
$username = "root"; // Ganti sesuai dengan username MySQL Anda
$password = ""; // Ganti sesuai dengan password MySQL Anda
$database = "tugas1"; // Ganti sesuai dengan nama database Anda

// Buat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
