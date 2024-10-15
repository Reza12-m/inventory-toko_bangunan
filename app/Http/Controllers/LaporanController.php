<?php
namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $barangMasuks = BarangMasuk::all();
        $barangKeluars = BarangKeluar::all();

        return view('laporan.index', compact('barangMasuks', 'barangKeluars'));
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
            return redirect()->route('laporan.daftar_laporan')->with('error', 'Jenis barang tidak valid.');
        }

        // Redirect kembali ke halaman Daftar Barang dengan pesan sukses
        return redirect()->route('laporan.daftar_laporan')->with('success', $message);
    }

    public function report()
    {
        $barangMasuks = BarangMasuk::all();
        $barangKeluars = BarangKeluar::all();

        // Generate report data (example: grouping, counting, etc.)
        // For simplicity, let's just pass all the data to the view
        return view('laporan.daftar_laporan', compact('barangMasuks', 'barangKeluars'));
    }
}
