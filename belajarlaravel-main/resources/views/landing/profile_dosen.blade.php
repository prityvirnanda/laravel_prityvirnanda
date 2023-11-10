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
                        <a class="nav-link" href="{{route('landing.berita_ksi')}}">Berita KSI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('landing.profile_kelulusan_ksi')}}">Profile Kelulusan KSI</a>
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
                            <td style="vertical-align: middle; text-align:center;">1</td>
                            <td style="vertical-align: middle;">12002164</td>
                            <td style="vertical-align: middle;">Eva Kurniawaty, M.Kom</td>
                            <td style="vertical-align: middle;">9900008796</td>
                            <td style="vertical-align: middle;">D2 Jalur Cepat Administrasi Jaringan Komputer</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">2</td>
                            <td style="vertical-align: middle;">12002161</td>
                            <td style="vertical-align: middle;">Muhammad Ridho Nosa, S.T., M.Kom</td>
                            <td style="vertical-align: middle;"> 9900008798</td>
                            <td style="vertical-align: middle;">D2 Jalur Cepat Administrasi Jaringan Komputer</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">3</td>
                            <td style="vertical-align: middle;">12002162</td>
                            <td style="vertical-align: middle;">Niky Hardinata, M.Kom</td>
                            <td style="vertical-align: middle;"> 9900008809</td>
                            <td style="vertical-align: middle;">D2 Jalur Cepat Administrasi Jaringan Komputer</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">4</td>
                            <td style="vertical-align: middle;">198712092019031010</td>
                            <td style="vertical-align: middle;">Desi Amirullah, M.T</td>
                            <td style="vertical-align: middle;">0009128701</td>
                            <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">5</td>
                            <td style="vertical-align: middle;">198512302019031006</td>
                            <td style="vertical-align: middle;">Eko Prayitno, M.Kom</td>
                            <td style="vertical-align: middle;">1030128502</td>
                            <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">6</td>
                            <td style="vertical-align: middle;">198708122019031010</td>
                            <td style="vertical-align: middle;">Lipantri Mashur Gultom, M.Kom</td>
                            <td style="vertical-align: middle;">0112088701</td>
                            <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">7</td>
                            <td style="vertical-align: middle;">198611062019031006</td>
                            <td style="vertical-align: middle;">Muhammad Nasir, M.Kom</td>
                            <td style="vertical-align: middle;">0006118604</td>
                            <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">8</td>
                            <td style="vertical-align: middle;">1200146</td>
                            <td style="vertical-align: middle;">Nurul Fahmi, M.T</td>
                            <td style="vertical-align: middle;">0031018901</td>
                            <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">9</td>
                            <td style="vertical-align: middle;">197912172021212008</td>
                            <td style="vertical-align: middle;">Sri Mawarni, M.Si</td>
                            <td style="vertical-align: middle;">1017127901</td>
                            <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">10</td>
                            <td style="vertical-align: middle;">198708122019031011</td>
                            <td style="vertical-align: middle;">Supria, M.Kom</td>
                            <td style="vertical-align: middle;">0012088702</td>
                            <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">11</td>
                            <td style="vertical-align: middle;">1200145</td>
                            <td style="vertical-align: middle;">Tengku Musri, M.Kom</td>
                            <td style="vertical-align: middle;">0008038502</td>
                            <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">12</td>
                            <td style="vertical-align: middle;">198911262020121006</td>
                            <td style="vertical-align: middle;">Wahyat, M.Kom</td>
                            <td style="vertical-align: middle;">0026118904</td>
                            <td style="vertical-align: middle;">D3 Teknik Informatika</td>
                        </tr>
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
                            <td style="vertical-align: middle; text-align:center;">16</td>
                            <td style="vertical-align: middle;">199005222019031010</td>
                            <td style="vertical-align: middle;">Depandi Enda, M.Kom</td>
                            <td style="vertical-align: middle;">0022059004</td>
                            <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">17</td>
                            <td style="vertical-align: middle;">198705092022032004</td>
                            <td style="vertical-align: middle;">Elvi Rahmi, S.T., M.Kom</td>
                            <td style="vertical-align: middle;"> </td>
                            <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">18</td>
                            <td style="vertical-align: middle;">198904182022032008</td>
                            <td style="vertical-align: middle;">Eva Yumami, S.Kom., M.T</td>
                            <td style="vertical-align: middle;"> </td>
                            <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">19</td>
                            <td style="vertical-align: middle;">198312122019032011</td>
                            <td style="vertical-align: middle;">Fajar Ratnawati, M.Cs</td>
                            <td style="vertical-align: middle;">0012128304</td>
                            <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">20</td>
                            <td style="vertical-align: middle;">198805072015041003</td>
                            <td style="vertical-align: middle;">Fajri Profesio Putra, M.Cs</td>
                            <td style="vertical-align: middle;">0007058802</td>
                            <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
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
                            <td style="vertical-align: middle; text-align:center;">23</td>
                            <td style="vertical-align: middle;">198908222014042001</td>
                            <td style="vertical-align: middle;">Lidya Wati, M.kom</td>
                            <td style="vertical-align: middle;">0022088902 </td>
                            <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">24</td>
                            <td style="vertical-align: middle;">199212092022031006</td>
                            <td style="vertical-align: middle;">Muhammad Asep Subandri, M.Kom</td>
                            <td style="vertical-align: middle;">9900007396</td>
                            <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">25</td>
                            <td style="vertical-align: middle;">199109012022032006</td>
                            <td style="vertical-align: middle;">Nurmi Hidayasari, ST., M.Kom</td>
                            <td style="vertical-align: middle;"> 0001099105</td>
                            <td style="vertical-align: middle;">D4 Keamanan Sistem Informasi</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">26</td>
                            <td style="vertical-align: middle;">198306162018032001</td>
                            <td style="vertical-align: middle;">Rezki Kurniati, M.Kom</td>
                            <td style="vertical-align: middle;">1016068303</td>
                            <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align:center;">27</td>
                            <td style="vertical-align: middle;">199107112020122022</td>
                            <td style="vertical-align: middle;">Ryci Rahmatil Fiska, M.Kom</td>
                            <td style="vertical-align: middle;">1011079101</td>
                            <td style="vertical-align: middle;">D4 Rekayasa Perangkat Lunak</td>
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