<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index()
    {
        $barangMasuk = BarangMasuk::all();
        return view('barangMasuk.index', compact('barangMasuk'));
    }

    public function create()
    {
        return view('barangMasuk.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required|numeric',
            'tanggal_masuk' => 'required|date',
        ]);

        // Proses penyimpanan data ke dalam database
        BarangMasuk::create($validatedData);

        // Redirect ke halaman yang sesuai dengan berhasil menyimpan data
        return redirect()->route('barang-masuk.index')->with('success', 'Data barang masuk berhasil disimpan.');
    }

    public function edit(BarangMasuk $barangMasuk)
    {
        return view('barangMasuk.edit', compact('barangMasuk'));
    }

    public function update(Request $request, BarangMasuk $barangMasuk)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required|integer',
            'tanggal_masuk' => 'required|date',
        ]);

        $barangMasuk->update($request->all());

        return redirect()->route('barang-masuk.index')->with('success', 'Barang masuk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $barangMasuk = BarangMasuk::findOrFail($id);
        $barangMasuk->delete();

        return redirect()->route('barang-masuk.index')->with('success', 'Barang masuk berhasil dihapus.');
    }
}

