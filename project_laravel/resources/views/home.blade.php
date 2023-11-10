<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        background-image: url('image/perpustakaan.jpg');
        /* Ganti dengan path gambar yang sesuai */
        background-size: cover;
        /* Untuk mengisi seluruh area latar belakang */
        background-repeat: no-repeat;
        /* Agar gambar tidak diulang-ulang */
        background-attachment: fixed;
        /* Untuk menjaga gambar tetap di tempatnya saat menggulir halaman */
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/"> Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi </a>
            <a class="navbar-brand" href="{{ route('biodata') }}"> Berita </a>
        </div>
    </nav>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-12 text-center">
                <h1 style="color: black;">Selamat Datang!</h1>
                <h3 style="color: black;">Di Politeknik Negeri Bengkalis</h3>
                <div class="container mt-5">

                </div>
                <h6 class="mt-3">Silahkan <a href="{{ route('auth.login') }}" style="text-decoration: none;">masuk</a>
                    atau <a href="{{ route('auth.register') }}" style="text-decoration: none;">daftar</a>
                    jika anda belum punya akun
                </h6>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">

    </script>
</body>

</html>