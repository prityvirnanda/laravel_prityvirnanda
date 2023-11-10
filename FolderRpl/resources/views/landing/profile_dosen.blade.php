<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Dosen</title>
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
                        <a class="nav-link" href="{{route('landing.berita_rpl')}}">Berita rpl</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('landing.profile_kelulusan_rpl')}}">Profile Kelulusan rpl</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('landing.profile_dosen')}}">Profile Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link col-1" style="margin-left: 520px;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <h3 class="mt-3">Profil Dosen</h3>

            <div class="col-lg mt-3">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td>NO</td>
                        <td>NIP / NIK</td>
                        <td>Nama</td>
                        <td>NIDN</td>
                        <td>Program Studi</td>
                    </tr>
                    <tbody>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">13</td>
                            <td style="vertical-align: middle;">198209192021211003</td>
                            <td style="vertical-align: middle;"> Mansur, M.Kom</td>
                            <td style="vertical-align: middle;">1019098203</td>
                            <td style="vertical-align: middle;">D4 Keamanan Sistem Informasi</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">14</td>
                            <td style="vertical-align: middle;">198510052015041001 </td>
                            <td style="vertical-align: middle;">Agus Tedyyana, M.Kom</td>
                            <td style="vertical-align: middle;">0005108501</td>
                            <td style="vertical-align: middle;">D4 Keamanan Sistem Informasi</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">15</td>
                            <td style="vertical-align: middle;">198508122014041001</td>
                            <td style="vertical-align: middle;">Danuri, M.Cs</td>
                            <td style="vertical-align: middle;">1012088501</td>
                            <td style="vertical-align: middle;">D4 Keamanan Sistem Informasi</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">21</td>
                            <td style="vertical-align: middle;">198611072015041002 </td>
                            <td style="vertical-align: middle;">Jaroji, M.Kom</td>
                            <td style="vertical-align: middle;">0007118603</td>
                            <td style="vertical-align: middle;">D4 Keamanan Sistem Informasi</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">22</td>
                            <td style="vertical-align: middle;">197706072014041001</td>
                            <td style="vertical-align: middle;">Kasmawi, M.Kom</td>
                            <td style="vertical-align: middle;">1007067701</td>
                            <td style="vertical-align: middle;">D4 Keamanan Sistem Informasi</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">25</td>
                            <td style="vertical-align: middle;">199109012022032006</td>
                            <td style="vertical-align: middle;">Nurmi Hidayasari, ST., M.Kom</td>
                            <td style="vertical-align: middle;"> 0001099105</td>
                            <td style="vertical-align: middle;">D4 Keamanan Sistem Informasi</td>
                        </tr>
                      
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <footer class="text-center mt-5 bg-primary" style="padding:5px;">
        <h5>Politeknik Negeri Bengkalis &#169; 2019, Polbeng</h5>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>