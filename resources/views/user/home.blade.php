<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Politeknik Negeri Bengkalis | D-IV Rakayasa Perangkat Lunak</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route('ksi.berita') }}">Berita KSI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ksi.lulusan') }}">Profile Lulusan KSI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ksi.dosen') }}">Profile Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h4 class="text-secondary">Selamat Datang {{ Auth::user()->name }}</h4>
            </div>
            <div class="col"></div>
            <div class="col-1"><a href="{{ route('logout') }}" style="text-decoration: none">
                    <p class="text-end text-black fw-semibold">Logout</p>
                </a></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
