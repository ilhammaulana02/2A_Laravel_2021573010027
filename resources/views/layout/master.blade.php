<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>@yield('title','Sistem Informasi Mahasiswa')</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" @yield('menuMahasiswa') href="/mahasiswa">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @yield('menuDosen') href="/dosen">Data Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @yield('menuGallery') href="/gallery">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>

    @section('content')
    <div class="alert alert-primary text-center">Sistem Informasi Mahasiswa</div>
    @show

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem Informasi Mahasiswa | Copyright &copy; {{ date('Y') }} Teknik Informatika
        </div>
    </footer>
</body>
</html>