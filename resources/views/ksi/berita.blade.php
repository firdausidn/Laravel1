<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>
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
                        <a class="nav-link nav-link active" aria-current="page" href="{{ route('ksi.berita') }}">Berita KSI</a>
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

    <!-- Jumbotron -->
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-6 fw-bold">BERITA TERBARU</h1>
            <p class="col-md-8 fs-4">Dapatkan informasi terbaru mengenai Program Studi Keamanan Sistem Informasi yang menarik ini, dan segera mendaftar untuk memanfaatkan peluang berharga ini. Keamanan informasi sangat penting dalam era digital, dan program studi ini akan membekali Anda dengan pengetahuan yang diperlukan untuk masa depan yang sukses.</p>
        </div>
    </div>
    <!-- End Jumbotron -->

    <!-- Card -->
    <section id="card">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col mb-5">
                    <div class="card h-100">
                        <img src="{{ asset('image/6436789.jpg') }}" class="card-img-top" alt="" width="450" height="350">
                        <div class="card-body text-center">
                            <h5 class="card-title">Penerimaan Mahasiswa Baru</h5>
                            <p class="card-text">Telah dibuka penerimaan mahasiswa baru program studi keamanan sistem informasi dengan kuota sebanyak 250 mahasiswa</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-muted">Terakhir update 1 hari yang lalu</small>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 text-center">
                        <img src="{{ asset('image/8601.jpg') }}" class="card-img-top" alt="" width="450" height="350">
                        <div class="card-body text-center">
                            <h5 class="card-title">Juara 3 Keamanan Siber KMIPN</h5>
                            <p class="card-text">Mahasiswa program studi Keamanan sistem informasi berhasil meraih juara 3 dalam kegiatan KMIPN cabang lomba keamanan siber</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-muted">Terakhir update 20 jam yang lalu</small>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 text-end">
                        <img src="{{ asset('image/4119036.jpg') }}" class="card-img-top" alt="" width="450" height="350">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ujian Akhir Semester</h5>
                            <p class="card-text">Pada tanggal 18 Desember 2023 mahasiswa program studi keamanan sistem informasi, akan melaksanakan ujian akhir semester.</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-muted">Terakhir update 2 jam yang lalu</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Card -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
