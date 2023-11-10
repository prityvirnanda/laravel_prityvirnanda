<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV
                Keamanan Sistem Informasi</a>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h4 lass="text-secondary">Selamat Datang {{ Auth::user()->name}}</h4>
            </div>
            <div class="col"></div>
            <div class="col-1"><a href="{{route('logout')}}" style="text-decoration: none">
                    <p class="text-end text-black fw-semibold">logout</p>
                </a>

            </div>
        </div>


        <p class="mt-5 text-center">
            <a href="{{ route('admin.buku') }}" class="text-decoration-none">Buku</a> |
            <a href="#" class="text-decoration-none">Data Admin</a> |
            <a href="#" class="text-decoration-none">Peminjaman</a>
        </p>

    </div>
    </div>
    </div>
    </div>
    <div class="container mt-3">
        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ Session::get('success')}}
            <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
    <div class="row mt-4">
        <div class="col"></div>
        <div class="col-6">
            <form action="{{ route('admin.home') }}" method="GET">
                @csrf
                <div class="input-group">
                    <input type="search" name="search" class="form-control rounded" placeholder="Cari nama admin"
                        aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-primary">
                        search</button>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
    <div class="row mt-5">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col-2">
            <a class="btn btn-success" href="{{ route('admin.tambah')}}"
                style="text-decoration: none; margin-left: 30px">Tambah
                Data +</a>
        </div>
    </div>
    <table class="table" style="margin-top: 10px">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        
</body>

</html>