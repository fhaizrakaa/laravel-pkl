<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // mendefinisikan model siswa menggunakan tabel dengan nama siswa
    // karena klo d laravel akan d baca menggunakan b inggrs
    protected $table = 'siswa';
}
