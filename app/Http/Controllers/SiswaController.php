<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function tampil() {

        // mengmbil smw data siswa
        $siswa = Siswa::get();
        
        return view('siswa.tampil', compact('siswa'));
    }

    // menampilkan hlman untuk menmbhkan siswa
    function tambah() {
        return view('siswa.tambah');
    }

    // pke $request krna untuk mengambil data dr form 
    function submit(Request $request) {

        // mengambil data dr tambah.blade.php 
        $siswa = new Siswa();

        // membanding data ($request dr name tambah.blade.php) ($siswa dr name buat_tabel_siswa.php)
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->hobi = $request->hobi;

        // menyimpan
        $siswa->save();

        // setlah d tmbhkan akan d arah kan ke siswa.tampil
        return redirect()->route('siswa.tampil');

    }

    function edit($id) {
        // mencari siswa menggunakan find 
        $siswa = Siswa::find($id);

        return view('siswa.edit', compact('siswa'));
    }

    function update(Request $request, $id) {
        $siswa = Siswa::find($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->hobi = $request->hobi;

        // menyimpan
        $siswa->update();

        // setlah d tmbhkan akan d arah kan ke siswa.tampil
        return redirect()->route('siswa.tampil');

    }

    function delete($id) {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect()->route('siswa.tampil');
    }
}
