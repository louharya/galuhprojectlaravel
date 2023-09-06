@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Barang</h2>
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf

            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            <!-- Menampilkan notifikasi warning jika ada -->
            @if (Session::has('warning'))
                <div class="alert alert-warning">
                    {{ Session::get('warning') }}
                </div>
            @endif

            <div class="form-group">
                <label for="nama_barang">Nama Barang:</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga Barang:</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
