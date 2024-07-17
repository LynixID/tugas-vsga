<?php
// Menggunakan file connection.php
include 'connection.php';

// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form dan mengamankan data
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $penulis = mysqli_real_escape_string($conn, $_POST['penulis']);
    $tahun_terbit = mysqli_real_escape_string($conn, $_POST['tahun_terbit']);


    if (empty($id)) {
        // Menyiapkan statement SQL untuk memasukkan data baru
        $sql = "INSERT INTO tb_data (nim, nama, jenis_kelamin, alamat, prodi, agama) VALUES ('$nim', '$nama', '$jenis_kelamin', '$alamat', '$prodi', '$agama')";
    } else {
        // Menyiapkan statement SQL untuk memperbarui data
        $sql = "UPDATE tb_data SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', prodi='$prodi', agama='$agama' WHERE nim='$id'";
    }

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        // Jika berhasil, redirect ke index.php
        header("Location: index.php");
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan kesalahan
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Menutup koneksi
mysqli_close($conn);
