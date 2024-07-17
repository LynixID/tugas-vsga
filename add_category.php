<?php
session_start();
include("connection.php");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_kategori = $_POST['nama_kategori'];
    
    $sql = "INSERT INTO kategori_buku (nama_kategori) VALUES ('$nama_kategori')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['notif'] = "Kategori Buku Berhasil ditambah.";
        header('Location: manage_books.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
