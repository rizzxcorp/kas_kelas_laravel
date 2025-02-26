<?php
$host = "localhost";  // host db
$user = "root";       // Username db
$pass = "";           // Password db
$dbname = "sistem_keuangan_kas_kelas";

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>