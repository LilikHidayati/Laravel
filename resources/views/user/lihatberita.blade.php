<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>

    <style>
     /* CSS untuk class navbar */
.navbar {
    background-color: #5b66a4; /* Warna latar belakang */
    overflow: hidden; /* Mengatasi overflow content */
}

.navbar a {
    float: left; /* Membuat tautan berada di sebelah kiri */
    display: block; /* Mengubah tautan menjadi elemen blok */
    color: white; /* Warna teks */
    text-align: center; /* Pusatkan teks dalam tautan */
    padding: 14px 16px; /* Padding atas dan bawah 14 piksel, padding kanan dan kiri 16 piksel */
    text-decoration: none; /* Hapus dekorasi tautan bawaan */
}

.navbar a:hover {
    background-color: #ddd; /* Warna latar belakang saat tautan dihover */
    color: black; /* Warna teks saat tautan dihover */
}


        </style>
</head>
</head>

<body>
<div class="navbar">
<a href="{{ route('user.home') }}">Buku</a>
        <a href="{{ route('user.lihatberita') }}">Berita</a>
        <a href="{{ route('user.lihatlulusan') }}">Lulusan</a>
        
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
        <div class="row mt-5 mb-5">
            <div class="col"></div>
            <div class="col-6">
                <form action="" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" class="form-control rounded" placeholder="Cari nama berita"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary">search</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
        @foreach ($data as $berita)
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-2"><img style="width: 150px" src="{{ asset('images/' . $berita->gambar) }}"
                            alt="cover buku"></div>
                    <div class="col-2">
                        <p class="fw-bold">Judul</p>
                        <p class="fw-bold">Penulis</p>
                        <p class="fw-bold">Konten</p>
                        <p class="fw-bold">Tahun terbit</p>
                       
                    </div>
                    <div class="col-8">
                        <p>{{ $berita->judul }}</p>
                        <p>{{ $berita->penulis }}</p>
                        <p>{{ $berita->konten }}</p>
                        <p>{{ $berita->tt }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{ $data->links() }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
