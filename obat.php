<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Pasien dalam Modal</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Side bar -->
<div class="sidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="img/logo.png" width="50" height="50" alt="Logo">
        </div>
        <div class="sidebar-brand-text">Menu</div>
    </a>
    <hr class="mx-auto" style="max-width: 100%; width: 95%; margin-top: 15px;">
    <ul class="list-unstyled container">
        <li class="side-item">
            <a class="nav-link" href="dashboard.php">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="side-item">
            <a class="nav-link" href="pasien.php">
                <i class="fas fa-user"></i>
                <span>Pasien</span>
            </a>
        </li>
        <li class="side-item">
            <a class="nav-link" href="dokter.php">
                <i class="fas fa-user"></i>
                <span>Dokter</span>
            </a>
        </li>
        <li class="side-item">
            <a class="nav-link" href="#">
                <i class="fa-solid fa-pills fa"></i>
                <span>Obat</span>
            </a>
        </li>
    </ul>
    <hr class="mx-auto" style="max-width: 100%; width: 95%; margin-top: 15px;">
</div>

<!-- Script untuk sidebar -->
<script>
    const sidebar = document.querySelector('.sidebar');
    const content = document.querySelector('.content');
    document.querySelector('.navbar-toggler').addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
        content.classList.toggle('collapsed');
    });
</script>

<!-- NAVDASH -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Isi navbar -->
    </div>
</nav>
<!-- END NAVBAR -->

<!-- Content Obat -->
<div class="content">
    <div class="container-fluid">
        <div style="display: flex;">
            <div>
                <h2>Obat</h2>
                <p class="subtitle">Electronic Medical Record</p>
            </div>
            <div class="mt-1" style="margin-left: auto;">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addObatModal">Tambah Obat</button>
            </div>
        </div>

        <!-- Tabel Daftar Obat -->
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Nama Obat</th>
                    <th>Dosis</th>
                    <th>Deskripsi</th>
                    <th>Instruksi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data obat -->
                <tr>
                    <td>Paracetamol</td>
                    <td>500mg</td>
                    <td>Obat pereda nyeri dan demam</td>
                    <td>1-2 tablet setiap 6 jam</td>
                    <td>
                        <button class="btn btn-sm btn-warning">Edit</button>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </td>
                </tr>
                <!-- Data obat lainnya akan ditambahkan di sini -->
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Tambah Obat -->
<div class="modal fade" id="addObatModal" tabindex="-1" aria-labelledby="addObatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addObatModalLabel">Tambah Obat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="namaObat" class="form-label">Nama Obat</label>
                        <input type="text" class="form-control" id="namaObat" required>
                    </div>
                    <div class="mb-3">
                        <label for="dosis" class="form-label">Dosis</label>
                        <input type="text" class="form-control" id="dosis" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="instruksi" class="form-label">Instruksi Penggunaan</label>
                        <textarea class="form-control" id="instruksi" rows="2"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>