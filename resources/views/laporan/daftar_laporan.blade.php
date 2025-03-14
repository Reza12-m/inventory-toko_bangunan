@extends('layouts.app')

@section('title', 'Laporan Barang Keluar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Laporan Barang Keluar</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
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
                                        @forelse ($barangKeluar as $barang)
                                            <tr>
                                                <td>{{ $barang->nama_barang }}</td>
                                                <td>{{ $barang->jumlah }}</td>
                                                <td>{{ $barang->tanggal_keluar }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="text-center">Tidak ada barang keluar.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('path/to/your/image.jpg') }}" class="img-fluid" alt="Placeholder Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
