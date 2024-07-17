<?php
// Menggunakan file connection.php
include 'connection.php';

// Cek apakah NIM telah diterima
if (isset($_GET['nim'])) {
    // Mengambil NIM dan mengamankan data
    $nim = mysqli_real_escape_string($conn, $_GET['nim']);

    // Menyiapkan statement SQL untuk menghapus data
    $sql = "DELETE FROM tb_data WHERE nim = '$nim'";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        // Jika berhasil, redirect ke index.php
        header("Location: index.php");
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan kesalahan
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    // Jika NIM tidak ada, redirect ke index.php
    header("Location: index.php");
    exit();
}

// Menutup koneksi
mysqli_close($conn);
