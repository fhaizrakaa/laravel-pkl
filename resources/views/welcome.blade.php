<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Laravel</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
</head>
<body style="background-color: black;">

    <h1 style="color: whitesmoke;" class="text-center mt-3">Selamat Datang Di Aplikasi CRUD Laravel 11</h1>

    <div class="text-center">
    <a href="{{ route('siswa.tampil') }}" class="btn btn-primary">Kelola Siswa</a>
    </div>
</body>
</html>