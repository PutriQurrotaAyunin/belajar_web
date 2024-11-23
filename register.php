<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'myweb_users');

// Cek koneksi
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Tangani data dari form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    // Masukkan data ke tabel users
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
