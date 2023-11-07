<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #F0FFF0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        nav {
            background-color: #008080;
            color: white;
            padding: 10px 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            display: block;
        }

        nav ul li a:hover {
            background-color: #00CED1;
            color: white;
        }

        .container {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            margin: 20px auto;
            max-width: 800px;
        }

        .profile-image {
            border-radius: 50%;
            width: 200px; /* Sesuaikan dengan kebutuhan */
            height: 200px; /* Sesuaikan dengan kebutuhan */
            object-fit: cover;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        footer {
            text-align: center;
            background-color: #008080;
            color: white;
            padding: 10px;
        }
    </style>
    <title>Homepage</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand mr-auto" href="/">MY BIODATA</a>
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
    <div class="container">
        <center>
            <h1>Lilik Hidayati</h1>
            <img class="profile-image" src="{{asset('images/imge.jpg')}}" alt="Profile Image">
            <br>
            <p>Mahasiswa</p>
            <p>Anyeonghaseo.. Nama saya LILIK HIDAYATI<br>Nama panggilan saya Lilik. Saya mahasiswa dari Politeknik
                Negeri Bengkalis<br>Jurusan Teknik Informatika, Program Studi Rekayasa Perangkat Lunak, dan sekarang saya
                sedang<br>belajar mata kuliah Manajer Proyek Perangkat Lunak.</p>
            <table>
                <tr>
                    <th>Alamat</th>
                    <td>Kotoraja, Siak Kecil</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>Siak Kecil</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>11 November 2002</td>
                </tr>
                <tr>
                    <th>Sosial Media</th>
                    <td>
                        <ul>
                            <li>Instagram: <a href="https://instagram.com/likkhdynt_?igshid=MzRlODBiNWFlZA=="
                                    target="_blank">@Likkhdynt</a></li>
                            <li>Facebook: <a href="https://www.facebook.com/likkhdynt11" target="_blank">Lilikk</a></li>
                            <li>Email: <a href="lilikkhidayati1102@gmail.com"
                                    target="_blank">Lilikkhidayati1102@gmail.com</a></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>Riwayat Pendidikan</th>
                    <td>
                        <ul>
                            <li>SD : SDN 13 Sepotong</li>
                            <li>SMP : SMPN 3 Siak Kecil</li>
                            <li>SMA : SMAN 1 Siak Kecil</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>Software Skill</th>
                    <td>
                        <ul>
                            <li>Word</li>
                            <li>Excel</li>
                            <li>Java</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <footer>
        &copy; Copyright 2023 @Lilik Hidayati
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
