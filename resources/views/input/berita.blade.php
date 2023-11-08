<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">
    <title>Register</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"  href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#">Berita KSI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile Dosen</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Input Berita
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="{{ route('input.berita') }}">Input Berita</a></li>
                          <li><a class="dropdown-item" href="{{ route('input.dosen') }}">Input Data Dosen</a></li>
                        </ul>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center" style="margin-top: 60px">
        <div class="card" style="width: 40%">
            <div class="card-body p-4">
                <h3 class="card-title text-center"><b>Form Berita</b></h3>
                <form action="#" method="POST">
                    <div class="form-group mt-4">
                        <label class="text-secondary">Judul Berita</label>
                        <input type="text" class="form-control border border-secondary form-control-lg" name="name" required value="{{ old('name') }}">
                        <br>
                    </div>
                    <div class="form-group mt-1">
                        <label class="text-secondary">Deskripsi Berita</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="form-control btn btn-primary mt-5">Upload</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
