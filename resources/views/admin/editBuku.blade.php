<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Edit Data Buku</title>
    <style>
        .container {
            margin-top: 50px;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Rakayasa Perangkat Lunak</a>
        </div>
    </nav>
    <div class="container">
        <a href="{{ route('admin.buku') }}" class="mb-3">
            <i class="bi-arrow-left h1"></i>
        </a>
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::has('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong> {{ Session::get('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title text-center">Update Data Buku</h5>
                        <form action="/postEditBuku/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="text-secondary">Kode Buku</label>
                                <input type="text" class="form-control" name="kodeBuku" required value="{{ $data->kode_buku }}">
                                @error('kodeBuku')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-secondary">Judul Buku</label>
                                <input type="text" class="form-control" name="judulBuku" required value="{{ $data->judul_buku }}">
                                @error('judulBuku')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-secondary">Penulis</label>
                                <input type="text" class="form-control" name="penulis" required value="{{ $data->penulis }}">
                                @error('penulis')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-secondary">Penerbit</label>
                                <input type="text" class="form-control" name="penerbit" required value="{{ $data->penerbit }}">
                                @error('penerbit')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-secondary">Tahun Terbit</label>
                                <input type="text" class="form-control" name="tahunTerbit" required value="{{ $data->tahun_terbit }}">
                                @error('tahunTerbit')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-secondary">Cover Buku</label>
                                <input class="form-control mb-2" placeholder="Nama file lama: {{ $data->gambar }}" disabled>
                                <input class="form-control" type="file" name="gambar">
                                <div class="form-text">Maksimal ukuran gambar cover buku 5MB</div>
                                <img class="mt-3" style="width: 100px" src="{{ asset('/images/' . $data->gambar) }}" alt="cover buku">
                            </div>
                            <div class="form-group">
                                <label class="text-secondary">Kategori Buku</label>
                                <select class="form-select" aria-label="Floating label select example" name="kategori">
                                    <option value="Programmer" {{ $data->kategori == 'Programmer' ? 'selected' : '' }}>Programmer</option>
                                    <option value="Sains" {{ $data->kategori == 'Sains' ? 'selected' : '' }}>Sains</option>
                                    <option value="Komik" {{ $data->kategori == 'Komik' ? 'selected' : '' }}>Komik</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-secondary">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" style="height: 250px" required>{{ $data->deskripsi}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success mt-3">Update Data Buku</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
