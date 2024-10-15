<?php
namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $barangKeluar = BarangKeluar::all();
        return view('barang-keluar.index', compact('barangKeluar'));
    }

    public function create()
    {
        return view('barang-keluar.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required|numeric',
            'tanggal_keluar' => 'required|date',
        ]);
    
        BarangKeluar::create($validatedData);
    
        return redirect()->route('barang-keluar.index')->with('success', 'Data barang keluar berhasil disimpan.');
    }
    

    public function edit(BarangKeluar $barangKeluar)
    {
        return view('barang-keluar.edit', compact('barangKeluar'));
    }

    public function update(Request $request, BarangKeluar $barangKeluar)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required|integer',
            'tanggal_keluar' => 'required|date',
        ]);

        $barangKeluar->update($request->all());

        return redirect()->route('barang-keluar.index')->with('success', 'Barang Keluar berhasil diperbarui.');
    }

    public function destroy(BarangKeluar $barangKeluar)
    {
        $barangKeluar->delete();

        return redirect()->route('barang-keluar.index')->with('success', 'Barang Keluar berhasil dihapus.');
    }
}

