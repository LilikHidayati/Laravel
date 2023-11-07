<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
    body {
        background-image: url('images/wauuu.jpg');
        /* Ganti dengan path gambar yang sesuai */
        background-size: cover;
        /* Untuk mengisi seluruh area latar belakang */
        background-repeat: no-repeat;
        /* Agar gambar tidak diulang-ulang */
        background-attachment: fixed;
        /* Untuk menjaga gambar tetap di tempatnya saat menggulir halaman */
    }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>

        <nav class="navbar navbar-dark bg-primary">
            <div style="display: flex; align-items: center;">
                <img src="{{ ('images/logo.png') }}" width="200" height="200"
                    style="border-radius: 50%; margin-left: 10px;" />
                <div>
                    <a class="navbar-brand" href="/"> <br>
                        Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak
                    </a>
                </div>
        </nav>

        <div class="container" style="margin-top: 150px">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-black">Selamat Datang!</h1>
                    <h4 class="text-black">
                        Di Perpustakaan Negeri Bengkalis
                    </h4>
                    <h6 class="mt-3">
                        Silahkan
                        <a href="{{ route('auth.login') }}" style="text-decoration: none">masuk</a>
                        atau <a href="{{ route('auth.register') }}" style="text-decoration: none;">daftar</a>
                        jika anda belum punya akun
                    </h6>
                    <!-- Tambahkan tautan menu atau tombol untuk halaman baru di sini -->
                    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>