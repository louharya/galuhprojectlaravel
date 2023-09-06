@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Transaksi</h2>
    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="pembeli_id">Pilih Pembeli:</label>
            <select class="form-control" id="pembeli_id" name="pembeli_id">
                @foreach ($pembelis as $pembeli)
                    <option value="{{ $pembeli->id }}" {{ $pembeli->id == $transaksi->pembeli_id ? 'selected' : '' }}>{{ $pembeli->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="barang_id">Pilih Barang:</label>
            <select class="form-control" id="barang_id" name="barang_id">
                @foreach ($barangs as $barang)
                    <option value="{{ $barang->id }}" {{ $barang->id == $transaksi->barang_id ? 'selected' : '' }}>{{ $barang->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $transaksi->jumlah }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
