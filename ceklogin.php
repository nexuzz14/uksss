<?php
include 'koneksi.php';

// Assuming you have a valid database connection in $conn
session_start();

// Use mysqli_real_escape_string to prevent SQL injection
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = $_POST['password']; // No need to escape for hashing

// Use password_hash for secure password hashing
// Use PASSWORD_DEFAULT to automatically use the strongest available algorithm
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$query = "SELECT * FROM petugas WHERE username = '$username'";
$login = mysqli_query($conn, $query);

if ($login) {
    $row = mysqli_fetch_assoc($login);

    // Use password_verify to check the password
    if ($row && password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location: index.php");
        exit();
    }
}

header('location: gagal.php');

mysqli_close($conn); // Close the database connection after use
?>
