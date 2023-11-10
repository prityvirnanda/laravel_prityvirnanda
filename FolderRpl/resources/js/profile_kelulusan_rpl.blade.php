<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Kelulusan</title>
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
                        <a class="nav-link" href="{{route('landing.berita_rpl')}}">Berita Ksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('landing.profile_kelulusan_rpl')}}">Profile Kelulusan
                            Ksi</a>
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
    <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-6 fw-bold">Selamat Datang di Halaman Profil Lulusan Prodi KSI</h1>
                <p class="col-md-8 fs-4">Dapatkan informasi terkait pekerjaan mahasiswa program studi keamanan sistem informasi di masa depan.
                    Dengan berkonsultasi dengan para lulusan dari program studi keamanan sistem informasi.</p>
                <!--<button class="btn btn-primary btn-lg" type="button">Button</button>-->
            </div>
        </div>

        <section id="card">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col mb-5">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('image/prity.jpg') }}" class="card-img-top" alt="" width="300" height="300">
                            <div class="card-body">
                                <h5 class="card-title">Paijo (Angkatan 2020)</h5>
                                <h7 class="card-title">(Front End Developer)</h7>
                                <br><br>
                                <p class="card-text">Bekerja sebagai Front End Developer di perusahaan Telkom Indonesia dengan gaji 12 juta perbulan</p>

                                <!-- Facebook -->
                                <i class="fab fa-facebook-f"></i>

                                <!-- Twitter -->
                                <i class="fab fa-twitter"></i>

                                <!-- Google -->
                                <i class="fab fa-google"></i>

                                <!-- Instagram -->
                                <i class="fab fa-instagram"></i>

                                <!-- Linkedin -->
                                <i class="fab fa-linkedin-in"></i>

                                <!-- Pinterest -->
                                <i class="fab fa-pinterest"></i>

                                <!-- Vkontakte -->
                                <i class="fab fa-vk"></i>

                                <!-- Stack overflow -->
                                <i class="fab fa-stack-overflow"></i>

                                <!-- Youtube -->
                                <i class="fab fa-youtube"></i>

                                <!-- Github -->
                                <i class="fab fa-github"></i>

                                <!-- Dribbble -->
                                <i class="fab fa-dribbble"></i>

                                <!-- Reddit -->
                                <i class="fab fa-reddit-alien"></i>

                                <!-- Whatsapp -->
                                <i class="fab fa-whatsapp"></i>
                            </div>
                        </div>

                    </div>
                    <div class="col mb-5">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('image/7294793.jpg') }}" class="card-img-top" alt="" width="300" height="300">
                            <div class="card-body">
                                <h5 class="card-title">Sinta (Angkatan 2020)</h5>
                                <h7 class="card-title">(Back End Developer)</h7>
                                <br><br>
                                <p class="card-text">Bekerja sebagai Back End Developer di perusahaan Pertamina dengan gaji 17 juta perbulan</p>

                                <i class="fab fa-facebook-f"></i>

                                <!-- Twitter -->
                                <i class="fab fa-twitter"></i>

                                <!-- Google -->
                                <i class="fab fa-google"></i>

                                <!-- Instagram -->
                                <i class="fab fa-instagram"></i>

                                <!-- Linkedin -->
                                <i class="fab fa-linkedin-in"></i>

                                <!-- Pinterest -->
                                <i class="fab fa-pinterest"></i>

                                <!-- Vkontakte -->
                                <i class="fab fa-vk"></i>

                                <!-- Stack overflow -->
                                <i class="fab fa-stack-overflow"></i>

                                <!-- Youtube -->
                                <i class="fab fa-youtube"></i>

                                <!-- Github -->
                                <i class="fab fa-github"></i>

                                <!-- Dribbble -->
                                <i class="fab fa-dribbble"></i>

                                <!-- Reddit -->
                                <i class="fab fa-reddit-alien"></i>

                                <!-- Whatsapp -->
                                <i class="fab fa-whatsapp"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('image/7309667.jpg') }}" class="card-img-top" alt="" width="300" height="300">
                            <div class="card-body">
                                <h5 class="card-title">Risa (Angkatan 2020)</h5>
                                <h7 class="card-title">(Security Analyst)</h7>
                                <br><br>
                                <p class="card-text">Bekerja sebagai Security Analyst di perusahaan Google dengan gaji 120 juta perbulan</p>

                                <i class="fab fa-facebook-f"></i>

                                <!-- Twitter -->
                                <i class="fab fa-twitter"></i>

                                <!-- Google -->
                                <i class="fab fa-google"></i>

                                <!-- Instagram -->
                                <i class="fab fa-instagram"></i>

                                <!-- Linkedin -->
                                <i class="fab fa-linkedin-in"></i>

                                <!-- Pinterest -->
                                <i class="fab fa-pinterest"></i>

                                <!-- Vkontakte -->
                                <i class="fab fa-vk"></i>

                                <!-- Stack overflow -->
                                <i class="fab fa-stack-overflow"></i>

                                <!-- Youtube -->
                                <i class="fab fa-youtube"></i>

                                <!-- Github -->
                                <i class="fab fa-github"></i>

                                <!-- Dribbble -->
                                <i class="fab fa-dribbble"></i>

                                <!-- Reddit -->
                                <i class="fab fa-reddit-alien"></i>

                                <!-- Whatsapp -->
                                <i class="fab fa-whatsapp"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>