<!-- nama file layout -->
@extends('layout')

<!-- nama yield dr file layout -->
@section('konten')


<!-- menampilkan konten -->
<div class="d-flex">
    <h4 style="color: whitesmoke;">List Data Siswa</h4>

    <!-- class auto agr div nya ke kanan  -->
    <div class="ms-auto">
        <!-- diarhkan ke file web.php yaitu route siswa.tambah (btn success agr hijau)  -->
        <a class="btn btn-success" href="{{ route('siswa.tambah')}}">Tambah Siswa</a>
    </div>
</div>

<table style="background-color: black;" class="table">
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Jenis Kelamin</th>
        <th>Hobi</th>
        <th>Aksi</th>
    </tr>

    <!-- siswa yg sdh d compact menjadi data  -->
    @foreach($siswa as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nis }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->alamat }}</td>
        <td>{{ $data->no_hp }}</td>
        <td>{{ $data->jenis_kelamin }}</td>
        <td>{{ $data->hobi }}</td>
        <td>
            <!-- knp pke $data? krna data id nya masuk k dlm file web.php  -->
            <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>

            <form action="{{ route('siswa.delete', $data->id) }}" method="post">

            <!-- pke ini agar tdk expaired  -->
             @csrf 
             
             <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection