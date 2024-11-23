<?php
session_start();
include './Config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek apakah email dan password cocok di database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Login berhasil
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            header("Location: welcome.php"); // Redirect ke halaman selamat datang
        } else {
            echo "Invalid password";
        }
    } else {
        echo "No user found with that email";
    }
}

$conn->close();
?>

