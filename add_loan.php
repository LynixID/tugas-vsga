<?php
// Menggunakan file connection.php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $buku_id = $_POST['buku_id'];

    // Validasi buku_id
    if (empty($buku_id)) {
        echo 'Invalid book ID';
        exit;
    }

    // Insert ke tabel peminjaman
    $sql = "INSERT INTO peminjaman (buku_id, id_peminjam) VALUES ('$buku_id', NULL)";
    if (mysqli_query($conn, $sql)) {
        echo 'Book added to loan list';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
