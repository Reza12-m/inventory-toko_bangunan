<?php
// app/Models/BarangKeluar.php
// app/Models/BarangKeluar.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    

    protected $fillable = ['nama_barang', 'jumlah', 'tanggal_keluar'];
}
