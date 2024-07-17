<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Back End</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <!-- font ends -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body style="font-family:'Nunito'; overflow: hidden;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-end mb-4 mt-4">
                <button type="button" class="btn btn-primary" id="myInput" data-bs-toggle="modal" data-bs-target="#modal-input" onclick="resetInput()">Tambah</button>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="fs-5">NO</th>
                            <th class="fs-5">NIM</th>
                            <th class="fs-5">NAMA</th>
                            <th class="fs-5">JENIS KELAMIN</th>
                            <th class="fs-5">ALAMAT</th>
                            <th class="fs-5">PRODI</th>
                            <th class="fs-5">AGAMA</th>
                            <th class="fs-5">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Menggunakan file connection.php
                        include 'connection.php';

                        // Membaca data dari database
                        $sql = "SELECT * FROM tb_data";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $no++ . "</td>";
                                echo "<td>" . htmlspecialchars($row['nim']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['jenis_kelamin']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['prodi']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['agama']) . "</td>";
                                echo '<td>
                                    <button type="button" class="btn btn-outline-primary btn-sm fw-bold" data-bs-toggle="modal" data-bs-target="#modal-input" onclick=\'setInput(' . json_encode($row) . ')\'>Ubah</button>
                                    <a href="delete.php?nim=' . $row['nim'] . '" class="btn btn-outline-danger btn-sm fw-bold" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">Hapus</a>
                                  </td>';
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8' class='text-center'>Tidak ada data</td></tr>";
                        }

                        // Menutup koneksi
                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal input -->
        <div class="modal fade" id="modal-input" tabindex="-1" aria-labelledby="modalInputLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title">Tambah Data Pegawai</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="save.php" method="post">
                            <input type="hidden" id="id" name="id">
                            <div class="mb-3 row">
                                <label for="nim" class="col-md-3 form-label">NIM</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="nim" name="nim" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama" class="col-md-3 form-label">Nama</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="jenis_kelamin" class="col-md-3 form-label">Jenis Kelamin</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="">...</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="alamat" class="col-md-3 form-label">Alamat</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="alamat" name="alamat" style="resize: none;" required></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="prodi" class="col-md-3 form-label">Prodi</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="prodi" name="prodi" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="agama" class="col-md-3 form-label">Agama</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="agama" name="agama" required>
                                        <option value="">...</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Protestan">Protestan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Input End -->
    </div>
    <div class="gerigi"></div>

    <script>
        function resetInput() {
            $('#title').html('Tambah Data Pegawai');
            $('#id').val(null); // Ini harus mengatur nilai id ke null
            $('#nim').val('').prop('disabled', false).removeClass('disabled-input');
            $('#nama').val(''); // Ubah nama_pegawai menjadi nama
            $('#jenis_kelamin').val('');
            $('#alamat').val('');
            $('#prodi').val('');
            $('#agama').val('');
        }

        function setInput(pgw) {
            $('#title').html('Edit Data Pegawai');
            $('#id').val(pgw.nim); // Pastikan nim diset ke input id
            $('#nim').val(pgw.nim).prop('disabled', true).addClass('disabled-input');
            $('#nama').val(pgw.nama); // Ubah nama_pegawai menjadi nama
            $('#jenis_kelamin').val(pgw.jenis_kelamin);
            $('#alamat').val(pgw.alamat);
            $('#prodi').val(pgw.prodi);
            $('#agama').val(pgw.agama);
        }

        function showAlert() {
            Swal.fire({
                title: 'Error!',
                text: 'Do you want to continue',
                icon: 'error',
                confirmButtonText: 'Cool'
            });
        }
    </script>

</body>

</html>