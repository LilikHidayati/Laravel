<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Aktivitas Mahasiswa Jurusan RPL</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mr-auto" href="/">Politeknik Negeri Bengkalis | DIV Rekayasa Perangkat Lunak</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('berita') }}">Berita</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('aktivitas') }}">Aktivitas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <h1 class="text-center">Aktivitas Mahasiswa Jurusan Teknik Informatika</h1>
        <hr>

        <!-- Aktivitas Mahasiswa -->
        <div class="row">
            <!-- Aktivitas 1 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="/images/KI.jpg" class="card-img-top" alt="Foto Aktivitas 1">
                    <div class="card-body">
                        <h5 class="card-title">Kunjungan Industri</h5>
                        <p class="card-text">Kunjungan Industri merupakan sebuah kegiatan yang rutin dilakukan 
                            mahasiswa semua jurusan di politeknik negeri bengkalis. 
                            Pada bulan lalu mahasiswa jurusan teknik informatika prodi rekayasa 
                            perangkat lunak dan prodi keamanan sistem informasi melakukan
                            kunjungan industri ke malaysia-singapore. banyak tempat yang dikunjungi tentunya memberikan banyak
                            pengalaman bagi mahasiswa.
                        </p>
                        <a href="/img/a.PNG" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Aktivitas 2 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="/images/uprad.png" class="card-img-top" alt="Foto Aktivitas 2">
                    <div class="card-body">
                        <h5 class="card-title">Upgrading Kepengurusan Himpunan Mahasiswa Teknik Informatika 2022</h5>
                        <p class="card-text">Dalam Rangka meningkatkan semangat berorganisasi, Himpunan Mahasiswa Teknik 
                            Informatika (HMTI) mengadakan kegiatan Upgrading Kepengurusan diujung masa jabatan, 
                            Yang dilaksanakan pada Sabtu, 1 Oktober 2022 tepatnya di Aula Gedung Teknik Informatika., 
                            dengan tema “Melangkah dalam kolaborasi untuk meningkatkan pemahaman dalam 
                            berorganisasi yang professionalitas dan berkualitas”. Kegiatan diberlangusng 
                            secara Offline yang diikuti oleh seluruh pengurus Himpunan Mahasiswa Teknik Informatika.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Tambahkan Aktivitas Lainnya di sini -->

        </div>
    </div>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>