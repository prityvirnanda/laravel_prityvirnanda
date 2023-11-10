<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>User_Home</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="col-20 text-">
                <h4 class="text-secondary">selamat datang {{Auth::user()->name }} </h4>
            </div>
            <div class="col"></div>
            <div class="col-1"><a href="{{route('logout')}}" style="text-decoration: none">
                    <p class="text-end text-black fw-semibold">logout</p>
                </a>

                </a></div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>