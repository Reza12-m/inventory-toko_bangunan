<?php

// app/Models/BarangMasuk.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $fillable = [
        'nama_barang',
        'jumlah',
        'tanggal_masuk',
        // tambahkan atribut lain yang diperlukan
    ];
}

