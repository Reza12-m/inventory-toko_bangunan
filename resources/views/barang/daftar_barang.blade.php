@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')
<div class="container">!
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Daftar Barang</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">Nama Barang test</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Tanggal Masuk</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($barangMasuks as $barangMasuk)
                                    <tr>
                                        <td>{{ $barangMasuk->nama_barang }}</td>
                                        <td>{{ $barangMasuk->jumlah }}</td>
                                        <td>{{ $barangMasuk->tanggal_masuk }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Tidak ada barang masuk.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
