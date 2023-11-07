<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Berita Mahasiswa</title>
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
        <h1 class="text-center">Berita Mahasiswa</h1>
        <hr>

        <!-- Daftar Berita -->
        <div class="row">
            <!-- Berita 1 -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <img src="/images/polbeng1.jpg" class="card-img-top" alt="Gambar Berita 1">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">Gubri Syamsuar Salurkan Bantuan Beasiswa Kepada Politeknik Negeri Bengkalis</h5>
                        </center>
                        <br>
                        <p class="card-text">Dalam kunjungan kerja ke Kabupaten Bengkalis, Gubernur Riau (Gubri),
                             Syamsuar menyalurkan bantuan beasiswa kepada Politeknik Negeri Bengkalis 
                            pada Selasa (26/9)2023. Bantuan yang diserahkan sebesar Rp 693.500.000.<br>

                            Syamsuar sampaikan, beasiswa tersebut sebagai upaya dari Pemerintahan Provinsi (Pemprov) 
                            Riau untuk memajukan pendidikan. Maka, kata dia, hal terpenting yang musti diperhatikan 
                            dalam menciptakan pendidikan yang unggul adalah dengan mempergatikan Sumber Daya Manusia (SDM) nya.<br>

                            "Kami berharap bantuan ini disampaikan dengan tepat sasaran pemberian. 
                            Jadi artinya ini semua adalah dalam rangka meningkatkan kualitas SDM di Provinsi Riau,” ungkapnya.<br>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <img src="/images/polbeng3.jpeg" class="card-img-top" alt="Gambar Berita 2">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">Jurusan ADM Polbeng Juara 3 Ajang Internasional Business Administration Competition</h5>
                        </center>
                        <br>
                        <p class="card-text">Jurusan Administrasi Niaga Politeknik Negeri Bengkalis (Polbeng) berhasil meraih 
                            juara 3 di ajang International Business Administration Competition (IBAC) yang pertama 
                            dan Business Administration Competition (BAC) yang ke-9 diselenggarakan di Politeknik Negeri 
                            Batam 8 hingga 11 Agustus 2023.<br>
                            
                            BAC merupakan kegiatan tahunan sekaligus merupakan 
                            ajang kompetisi dan prestasi bagi mahasiswa Jurusan Administrasi Niaga/Bisnis 
                            Politeknik dan sekolah vokasi serumpun tingkat internasional.<br>

                            Jurusan Administrasi Niaga Polbeng hanya membawa 6 orang mahasiswa, yang akan diperlombakan untuk cabang 
                            lomba secretarial, meeting, business plan, business presentation dan MC.
                            Direktur Polbeng Johny Custer mengucapkan selamat dan tahniah kepada Mahasiswa 
                            Administrasi Niaga yang telah meraih Juara 3 pada cabang lomba secretarial competition oleh 
                            Shinta Karunia dari Program Studi (Prodi) Administrasi Bisnis Internasional.<br>

                            "The best vokal cabang lomba MC dimenangkan oleh Yogi Aidil Saputra Prodi 
                            Bisnis Digital, Iis Farida Okta kategori business plan dari Prodi Administrasi 
                            Bisnis Internasional, Anindhia Pratiwi kategori Business Presentation dari 
                            Prodi Administrasi Bisnis Internasional, Cut Mu'azinah kategori Meeting 
                            Preparation dari Prodi Administrasi Bisnis Internasional, dan Ananda Farhan 
                            Anjelino kategori typing speed dari Prodi Bisnis Digital," kata Direktur.</p><br>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Tambahkan Berita Lainnya di sini -->

        </div>
    </div>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>