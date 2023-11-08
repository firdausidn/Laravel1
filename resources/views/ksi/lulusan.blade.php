<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('user.home') }}">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route('ksi.berita') }}">Berita KSI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link active" aria-current="page" href="{{ route('ksi.lulusan') }}">Profile Lulusan KSI</a>
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
    <!-- Jumbotron -->
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-6 fw-bold">Selamat Datang di Halaman Profil Lulusan</h1>
            <p class="col-md-8 fs-4">Dapatkan informasi terupdate dari Program Studi Keamanan Sistem Informasi dan jangan lewatkan kesempatan untuk mendaftar di program studi ini.</p>
        </div>
    </div>
    <!-- End Jumbotron -->

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/7294809.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Rachmat Firdaus</h5>
                        <p class="card-text">Mahasiswa lulusan KSI dengan keterampilan dalam Jaringan Komputer dan Skill lainnya.</p>
                        <a href="#" class="btn btn-primary">Lihat Rincian</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/7309685.jpg') }}" class="card-img-top" alt="" >
                    <div class="card-body">
                        <h5 class="card-title">Alfian Syahli</h5>
                        <p class="card-text">Mahasiswa lulusan KSI dengan keterampilan dalam Jaringan Komputer dan Skill lainnya.</p>
                        <a href="#" class="btn btn-primary">Lihat Rincian</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/7309681.jpg') }}" class="card-img-top" alt="" >
                    <div class="card-body">
                        <h5 class="card-title">Nauval Fatur Rahman</h5>
                        <p class="card-text">Mahasiswa lulusan KSI dengan keterampilan dalam Jaringan Komputer dan Skill lainnya.</p>
                        <a href="#" class="btn btn-primary">Lihat Rincian</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/7309670.jpg') }}" class="card-img-top" alt="" >
                    <div class="card-body">
                        <h5 class="card-title">Putri Nur Izzati</h5>
                        <p class="card-text">Mahasiswa lulusan KSI dengan keterampilan dalam Jaringan Komputer dan Skill lainnya.</p>
                        <a href="#" class="btn btn-primary">Lihat Rincian</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
