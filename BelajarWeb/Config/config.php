<?php
$host = "localhost"; // Host database
$username = "root";  // Username MySQL
$password = "";      // Password MySQL (kosong jika default)
$dbname = "webapp";  // Nama database

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
