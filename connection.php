<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_perpustakaan');

if (!$conn) {
    die('Gagal Terhubung: ' . mysqli_connect_error());
}
