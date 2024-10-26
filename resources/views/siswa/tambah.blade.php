@extends('layout')

@section('konten')


<h4 style="color: whitesmoke;">Tambah Siswa</h4>

<form style="color: whitesmoke;" action="{{ route('siswa.submit') }}" method="post">

    <!-- setiap form yg d buat d laravel dgn method post, wajib pke ini  -->
     @csrf
    <label>NIS</label>
    <input type="number" name="nis" class="form-controll nb-2">
    <label>Nama</label>
    <input type="text" name="nama" class="form-controll nb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-controll nb-2">
    <label>No HP</label>
    <input type="text" name="no_hp" class="form-controll nb-2">
    <label>Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" class="form-controll nb-2">
    <label>Hobi</label>
    <input type="text" name="hobi" class="form-controll nb-2">

    <!-- primary agar wrna biru -->
    <button class="btn btn-primary">Tambah</button>
</form>

@endsection