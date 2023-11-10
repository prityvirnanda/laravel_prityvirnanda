<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Home_Admin</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasu</a>
        </div>
    </nav>
    <!-- Formulir Input Data Profil -->
    <div class="container mt-4">
        <h2 class="text-center">Input Data Profil Lulusan KSI</h2>
        <form method="POST" action="{{ route('inputprofil') }}">
            @csrf <!-- Laravel CSRF token -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lulusan</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" required>
            </div>
            <div class="mb-3">
                <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" required>
            </div>
            <!-- Tambahkan lebih banyak input sesuai dengan data profil yang Anda butuhkan -->
            <button type="submit" class="btn btn-primary">Simpan Profil</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
