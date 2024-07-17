<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku dan Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Tambah Buku dan Kategori Buku</h2>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-input">
            Tambah Buku
        </button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal-input-kategori">
            Tambah Kategori Buku
        </button>
    </div>

    <div class="container mt-5">
        <h2 class="text-center">Daftar Buku</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'display_books.php'; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah Buku -->
    <div class="modal fade" id="modal-input" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title">Tambah Buku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="add_book.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label class="col-md-4 form-label">Judul Buku</label>
                            <div class="col-md-8">
                                <input type="hidden" id="id" name="id">
                                <input type="text" class="form-control" id="judul" name="judul" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 form-label">Penulis</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="penulis" name="penulis">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 form-label">Penerbit</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="penerbit" name="penerbit">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 form-label">Tahun Terbit</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" id="tahunTerbit" name="tahun_terbit" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 form-label">Kategori</label>
                            <div class="col-md-8">
                                <select class="form-control" id="kategori" name="kategori_id" required>
                                    <!-- Options will be dynamically loaded from the database -->
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 form-label">Gambar Buku</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="ResetInput()">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Kategori Buku -->
    <div class="modal fade" id="modal-input-kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title-kategori">Tambah Kategori Buku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="add_category.php" method="post">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label class="col-md-4 form-label">Nama Kategori</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
                            </div>
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

    <script>
        function ResetInput() {
            $('#title').html('Tambah Buku');
            $('#id').val(null);
            $('#judul').val(null);
            $('#penulis').val(null);
            $('#penerbit').val(null);
            $('#tahunTerbit').val(null);
            $('#kategori').val(null);
            $('#gambar').val(null);
        }

        function loadCategories() {
            $.ajax({
                url: 'fetch_categories.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    let options = '<option value="" disabled selected>Pilih Kategori</option>';
                    data.forEach(function(category) {
                        options += `<option value="${category.kategori_id}">${category.nama_kategori}</option>`;
                    });
                    $('#kategori').html(options);
                },
                error: function() {
                    Swal.fire({
                        title: "Error",
                        text: "Gagal mengambil data kategori",
                        icon: "error"
                    });
                }
            });
        }

        $(document).ready(function() {
            loadCategories();
        });

        <?php if(isset($_SESSION['notif'])): ?>
            ShowNotif("<?php echo $_SESSION['notif']; ?>");
            <?php unset($_SESSION['notif']); ?>
        <?php endif; ?>

        function ShowNotif(notif) {
            Swal.fire({
                title: "Berhasil",
                text: notif,
                showCancelButton: false,
                showConfirmButton: false,
                timer: 3000,
                icon: "success"
            });
        }
    </script>
</body>
</html>
