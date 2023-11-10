<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berita KSI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{route('user.home')}}">
                <img src="{{('../images/logo polbeng.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Perpustakaan
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('landing.berita_ksi')}}">Berita KSI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('landing.profile_kelulusan_ksi')}}">Profile Kelulusan KSI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('landing.profile_dosen')}}">Profile Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link col-1" style="margin-left: 520px;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <h1>Berita</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="card-group col-lg-4">
                <div class="card">
                    <img src="{{('../images/berita 1.jpeg')}}" class="card-img-top" alt="..." width="200" height="250">
                    <div class="card-header">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title fs-5 text-justify">Diklat Pembelajaran Berbasis Industri Angkatan II (Kedua) Tingkat SMK Negeri dan Swasta Se-Provinsi Riau Tahun 2023</h6>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
            <div class="card-group col-lg-4">
                <div class="card">
                    <img src="{{('../images/berita 2.jpeg')}}" class="card-img-top" alt="..." width="200" height="250">
                    <div class="card-header">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title fs-5 text-justify">250 Mahasiswa Baru Jurusan Teknik Informatika Mengikuti Acara Pengenalan Jurusan Teknik Informatika Politeknik Negeri Bengkalis Tahun 2023</h6>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
            <div class="card-group col-lg-4">
                <div class="card">
                    <img src="{{('../images/berita 3.jpeg')}}" class="card-img-top" alt="..." width="200" height="250">
                    <div class="card-header">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title fs-5 text-justify">Dosen Jurusan Teknik Informatika Melaksanakan Uji Kompetensi Keahlian (UKK) di SMK Negeri 1 Siak Kecil</h6>

                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
            <div class="card-group col-lg-4 mt-5">
                <div class="card">
                    <img src="{{('../images/berita 4.jpg')}}" class="card-img-top" alt="..." width="200" height="250">
                    <div class="card-header">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title fs-5 text-justify">Tim Pengabdian Kepada Masyarakat (PKM) Jurusan TI melaksanakan BimTek Pengelolaan Aplikasi permohonan kepengurusan kependudukan secara online kepada staf bagian layanan pemerintahan Desa Air Putih</h6>

                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
            <div class="card-group col-lg-4 mt-5">
                <div class="card">
                    <img src="{{('../images/berita 5.jpg')}}" class="card-img-top" alt="..." width="200" height="250">
                    <div class="card-header">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title fs-5 text-justify">Inovasi Dosen Polbeng Bantu Atasi Permasalahan Nelayan Pambang</h6>

                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
            <div class="card-group col-lg-4 mt-5">
                <div class="card">
                    <img src="{{('../images/berita 6.jpg')}}" class="card-img-top" alt="..." width="200" height="250">
                    <div class="card-header">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title fs-5 text-justify">Dosen Prodi Sarjana Terapan Rekayasa Perangkat Lunak Mengikuti Sertifikasi CAIP</h6>

                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center mt-5 bg-primary" style="padding:5px;">
        <h5>Politeknik Negeri Bengkalis &#169; 2019, Polbeng</h5>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>