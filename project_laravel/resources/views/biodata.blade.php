<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<title>Prity Virnanda</title>
<style>
    nav ul {
        list-style: none;
        padding: 0;
        display: flex;
        background-color: #0000FF;
        margin: 0;
    }

    nav ul li {
        margin: 0;
    }

    nav ul li a {
        text-decoration: none;
        color: white;
        padding: 10px 20px;
        display: block;
    }

    nav ul li a:hover {
        background-color: #D3D3D3;
    }

    .center {
        display: block;
        margin: 0 auto;
    }
</style>
</head>
<body style="background-color:#F0FFF0 ;">
<nav>
    <ul>
        <li><a href="Home.html">Home</a></li>
        <li><a href="mycv.html">My Cv</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="about.html">About Me</a></li>
        <li><a href="{{route('auth.login') }}">Login</a></li>
    </ul>
</nav>

<br><br>
<img src="{{ ('image/alfi.jpg') }}" width="200" height="200" style="border-radius: 50%;" class="center"><br><br>
<center><h1>Prity Virnanda</h1><br>
<h5><P>(MAHASISWA)</h5></P>
<hr width="100%" color="blue" size="3">

<p>Hai, saya adalah Mahasiswa Politeknik Negeri Bengkalis. saya dari jurusan Teknik Informatika, priodi saya D-IV Keamanan Sistem Informasi, Semester V.</p>

<div style="max-width: 600px; margin: 3em auto">
    <table border="2" width="100%">
        <thead>
            <tr>
                <th>Skill</th>
                <th>Pengalaman</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <ul>
                        <li>HTML (Expert)</li>
                        <li>CSS (Beginner)</li>
                        <li>Javascript (Beginner)</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>Freelancer di Internet</li>
                        <li>Leader Local Linux Community</li>
                        <li>Leader Local Linux Community</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<hr>
<footer style="text-align: center;">
    <p>Copyright &copy; 2023 Prity Virnanda</p>
</footer>
</body>
</html>
