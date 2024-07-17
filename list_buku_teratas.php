<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku Paling Banyak Dipinjam</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Daftar Buku Paling Banyak Dipinjam</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Judul Buku</th>
                        <th class="px-4 py-2">Gambar</th>
                        <th class="px-4 py-2">Jumlah Peminjaman</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Koneksi ke database
                    $conn = mysqli_connect('localhost', 'root', '', 'ebooklibrary');

                    if (!$conn) {
                        die('Gagal Terhubung: ' . mysqli_connect_error());
                    }

                    // Query untuk menghitung jumlah peminjaman per buku dan mendapatkan gambar
                    $query = "
                        SELECT buku.judul, buku.gambar, COUNT(peminjaman.buku_id) AS jumlah_peminjaman
                        FROM peminjaman
                        JOIN buku ON peminjaman.buku_id = buku.buku_id
                        GROUP BY peminjaman.buku_id, buku.judul, buku.gambar
                        ORDER BY jumlah_peminjaman DESC
                    ";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                            <tr class='border-b'>
                                <td class='px-4 py-2 text-center'>{$no}</td>
                                <td class='px-4 py-2'>{$row['judul']}</td>
                                <td class='px-4 py-2'><img src='asset/img/{$row['gambar']}' alt='' width='100' height='130' object-fit='cover'></td>
                                <td class='px-4 py-2 text-center'>{$row['jumlah_peminjaman']}</td>
                            </tr>
                            ";
                            $no++;
                        }
                    } else {
                        echo "
                        <tr>
                            <td class='px-4 py-2 text-center' colspan='4'>Tidak ada data peminjaman</td>
                        </tr>
                        ";
                    }

                    // Menutup koneksi
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>