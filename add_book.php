<?php
include 'connection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$kategori_id = $_POST['kategori_id'];

$image_name = '';
if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
    $image_name = time() . '_' . $_FILES['gambar']['name'];
    $image_tmp = $_FILES['gambar']['tmp_name'];
    $upload_dir = 'asset/img/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    move_uploaded_file($image_tmp, $upload_dir . $image_name);
}

$stmt = $conn->prepare("INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, kategori_id, images) VALUES (?, ?, ?, ?, ?, ?)");
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("sssiss", $judul, $penulis, $penerbit, $tahun_terbit, $kategori_id, $image_name);

if ($stmt->execute()) {
    session_start();
    $_SESSION['notif'] = 'Buku baru berhasil ditambahkan';
    header('Location: manage_books.php');
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
