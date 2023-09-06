@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Transaksi</h2>
    <table class="table">
        <tr>
            <th>Nama Pembeli:</th>
            <td>{{ $transaksi->pembeli->nama }}</td>
        </tr>
        <tr>
            <th>Nama Barang:</th>
            <td>{{ $transaksi->barang->nama_barang }}</td>
        </tr>
        <tr>
            <th>Nama Barang:</th>
            <td>{{ $transaksi->barang->harga }}</td>
        </tr>
        <tr>
            <th>Jumlah:</th>
            <td>{{ $transaksi->jumlah }}</td>
        </tr>
    </table>
    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali ke Daftar Transaksi</a>
</div>
@endsection
