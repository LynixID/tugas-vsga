<?php
include 'connection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT b.judul, b.penulis, b.penerbit, b.tahun_terbit, k.nama_kategori, b.images 
        FROM buku b 
        JOIN kategori_buku k ON b.kategori_id = k.kategori_id";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td align='center'>" . $no++ . "</td>";
        echo "<td>" . htmlspecialchars($row['judul']) . "</td>";
        echo "<td>" . htmlspecialchars($row['penulis']) . "</td>";
        echo "<td>" . htmlspecialchars($row['penerbit']) . "</td>";
        echo "<td align='center'>" . htmlspecialchars($row['tahun_terbit']) . "</td>";
        echo "<td>" . htmlspecialchars($row['nama_kategori']) . "</td>";
        echo "<td><img src='asset/img/" . htmlspecialchars($row['images']) . "' alt='Gambar Buku' width='100'></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7' class='text-center'>Tidak ada buku yang ditemukan</td></tr>";
}

$conn->close();
?>