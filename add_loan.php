<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $buku_id = $_POST['buku_id'];

    if (empty($buku_id)) {
        echo 'Invalid book ID';
        exit;
    }

    $sql = "INSERT INTO peminjaman (buku_id) VALUES ('$buku_id')";
    if (mysqli_query($conn, $sql)) {
        echo 'Book added to loan list';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo 'Invalid request method';
}
