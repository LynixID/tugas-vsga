<?php
$conn = mysqli_connect('localhost', 'root', '', 'ebooklibrary');

if (!$conn) {
    die('Gagal Terhubung: ' . mysqli_connect_error());
}
