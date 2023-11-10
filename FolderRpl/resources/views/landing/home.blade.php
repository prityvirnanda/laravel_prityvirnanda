<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url('images/Perpustakaan.jpg');
        /* Ganti dengan path gambar yang sesuai */
        background-size: cover;
        /* Untuk mengisi seluruh area latar belakang */
        background-repeat: no-repeat;
        /* Agar gambar tidak diulang-ulang */
        background-attachment: fixed;
        /* Untuk menjaga gambar tetap di tempatnya saat menggulir halaman */
    }
</style>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{route('landing.home')}}">Politeknik Negeri Bengkalis | D-IV Keamanan
                Sistem Informasi</a>
        </div>
    </nav>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-12 text-center">
                <h1 style="color: black;">Selamat Datang!</h1>
                <h3 style="color: black;">Di Politeknik Negeri Bengkalis</h3>
                <h6 class="mt-3">
                    Silahkan
                    <a href="{{route('auth.login')}} " style="text-decoration: none">masuk</a>
                    atau <a href="{{route('auth.register')}}" style="text-decoration:none">daftar</a>
                    jika anda belum punya akun
                </h6>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>