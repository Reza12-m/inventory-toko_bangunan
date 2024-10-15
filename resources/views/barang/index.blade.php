@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')
<div class="page-heading">
    <h3>Daftar Barang</h3>
</div>
<div class="page-content">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($barang->isEmpty())
        <p>Tidak ada barang.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                    <tr>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->jumlah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
