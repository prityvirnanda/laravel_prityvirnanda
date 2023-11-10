<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{route('admin.home')}}">
                <img src="{{('../images/logo polbeng.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link" style="margin-left: 440px;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-secondary">Selamat Datang {{ Auth::user()->name}}</h1>
                <h4 class="text-secondary">Di Perpustakaan Politeknik Negeri
                    Bengkalis</h4>
                <p class="mt-4 ">
                    <a href="{{route('admin.buku')}}" class="text-decoration-none">Buku</a> |
                    <a href="{{route('admin.admin')}}" class="text-decoration-none">Data Admin</a> |
                    <a href="#" class="text-decoration-none">Peminjaman</a>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>