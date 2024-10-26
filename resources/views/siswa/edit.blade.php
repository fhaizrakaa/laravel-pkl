@extends('layout')

@section('konten')


<h4>Edit Siswa</h4>

<form action="{{ route('siswa.update', $siswa->id) }}" method="post">

    <!-- setiap form yg d buat d laravel dgn method post, wajib pke ini  -->
     @csrf
    <label>NIS</label>
    <input type="number" name="nis" value="{{ $siswa->nis }}" class="form-controll nb-2">
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-controll nb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-controll nb-2">
    <label>No HP</label>
    <input type="text" name="no_hp" value="{{ $siswa->no_hp }}" class="form-controll nb-2">
    <label>Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}" class="form-controll nb-2">
    <label>Hobi</label>
    <input type="text" name="hobi" value="{{ $siswa->hobi }}" class="form-controll nb-2">

    <!-- primary agar wrna biru -->
    <button class="btn btn-primary">Edit</button>
</form>

@endsection