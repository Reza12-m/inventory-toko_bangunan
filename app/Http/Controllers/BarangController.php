<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangMasuks = BarangMasuk::all();
        $barangKeluars = BarangKeluar::all();

        return view('barang.daftar_barang', compact('barangMasuks', 'barangKeluars'));
    }

    public function storeBarang(Request $request, $jenis)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_barang' => 'required|string',
            'jumlah' => 'required|integer',
        ]);

        // Tambahkan logika untuk jenis barang
        if ($jenis === 'masuk') {
            // Simpan data barang masuk
            BarangMasuk::create($validatedData);
            $message = 'Data barang masuk berhasil disimpan.';
        } elseif ($jenis === 'keluar') {
            // Simpan data barang keluar
            BarangKeluar::create($validatedData);
            $message = 'Data barang keluar berhasil disimpan.';
        } else {
            // Handle jika jenis tidak dikenali
            return redirect()->route('barang.daftar_barang')->with('error', 'Jenis barang tidak valid.');
        }

        // Redirect kembali ke halaman Laporan Barang dengan pesan sukses
        return redirect()->route('barang.daftar_barang')->with('success', $message);
    }
}
