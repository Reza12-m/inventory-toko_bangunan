@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Barang Masuk</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($barangMasuks->isEmpty())
                        <p>Tidak ada data barang masuk.</p>
                    @else
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Tanggal Masuk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barangMasuks as $barangMasuk)
                                        <tr>
                                            <td>{{ $barangMasuk->nama_barang }}</td>
                                            <td>{{ $barangMasuk->jumlah }}</td>
                                            <td>{{ $barangMasuk->tanggal_masuk }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Barang Keluar</h3>
                </div>
                <div class="card-body">
                    @if ($barangKeluars->isEmpty())
                        <p>Tidak ada data barang keluar.</p>
                    @else
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Tanggal Keluar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barangKeluars as $barangKeluar)
                                        <tr>
                                            <td>{{ $barangKeluar->nama_barang }}</td>
                                            <td>{{ $barangKeluar->jumlah }}</td>
                                            <td>{{ $barangKeluar->tanggal_keluar }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
