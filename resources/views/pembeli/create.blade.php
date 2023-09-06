@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Supplier</h2>
        <form action="{{ route('pembeli.store') }}" method="POST">
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
                <label for="nama">Nama Supplier:</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Supplier:</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
    </div>
@endsection
