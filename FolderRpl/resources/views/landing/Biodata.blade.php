<!-- resources/views/landing/biodata.blade.php -->

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Saya</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-T8PMkqwvZt6MqRi/T86IuxdbUKyMcDeUGxHmHVUUnzskrP4ig01miCwE5sLdZbWW" crossorigin="anonymous">
    <style>
    body {
        font-family: 'Helvetica', sans-serif;
        background-color: #f8f9fa;
        color: #343a40;
        margin: 20px;
    }

    nav {
        background-color: #007bff;
        padding: 15px;
        text-align: center;
    }

    nav a {
        color: #fff;
        margin: 0 10px;
        text-decoration: none;
        font-weight: bold;
    }

    header {
        text-align: center;
    }

    header img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
    }

    header figcaption {
        margin-top: 10px;
        font-size: 1.5em;
        color: #007bff;
    }

    header strong {
        display: block;
        margin-top: 10px;
        font-size: 1.2em;
    }

    main {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    main h1 {
        color: #007bff;
    }

    main hr {
        border-color: #007bff;
        margin-bottom: 20px;
    }

    .content p {
        margin-bottom: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #dee2e6;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #007bff;
        color: #fff;
    }

    footer {
        text-align: center;
        margin-top: 20px;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
    }
    </style>
</head>

<body>

    <nav>
        <p class="mt-4">
            <a href="{{ route('landing.biodata') }}" class="text-decoration-none">Biodata Saya</a> |
            <a href="{{ route('landing.berita_rpl') }}" class="text-decoration-none">Berita Ksi</a> |
            <a href="{{ route('landing.profile_dosen') }}" class="text-decoration-none">Profile Dosen</a> |
            <a href="{{ route('landing.profile_kelulusan_rpl') }}" class="text-decoration-none">Profile Kelulusan
                Ksi</a> |
            <a href="{{ route('logout') }}" style="text-decoration: none">Logout</a>



        </p>
    </nav>

    <br><br>

    <header>
        <figure>
            <img src="{{ asset('images/prity.jpg') }}" alt="Logo" width="30" height="24"
                class="d-inline-block align-text-top">
            <figcaption>Prity Virnanda</figcaption>
            <strong>(6404211034)</strong>
        </figure>
    </header>

    <br><br><br>

    <main>
        <h1>Biodata Saya</h1>
        <hr>
        <article class="content">
            <p><strong>Nama:</strong> Keamanan Sistem Informasi</p>
            <p><strong>Umur:</strong> 20 tahun</p>
            <p><strong>Alamat:</strong> Bengkalis</p>
            <p><strong>Pekerjaan:</strong> Mahasiswa</p>
            <p><strong>Skills:</strong> Laravel</p>
        </article>
    </main>

    <br><br>

    <footer>
        <p>Prity Virnanda, &copy; 2023</p>
    </footer>

</body>

</html>