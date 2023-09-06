@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Transaksi</h2>
        <form action="{{ route('transaksi.store') }}" method="POST">
            @csrf

            @if (Session::has('success'))
                <div class="alert alert-success">
                    Transaksi Anda berhasil. Terima Kasih!
                </div>
            @endif

            <!-- Menampilkan notifikasi warning jika ada -->
            @if (Session::has('warning'))
                <div class="alert alert-warning">
                    {{ Session::get('warning') }}
                </div>
            @endif

            <div class="form-group">
                <label for="pembeli_id">Pilih Pembeli:</label>
                <select class="form-control" id="pembeli_id" name="pembeli_id" required>
                    <option value="">Pilih Pembeli</option>
                    @foreach ($pembelis as $pembeli)
                        <option value="{{ $pembeli->id }}">{{ $pembeli->nama }}</option>
                    @endforeach
                </select> 
            </div>

            <div class="form-group">
                <label for="barang_id">Pilih Barang:</label>
                <select class="form-control" id="barang_id" name="barang_id" required>
                    <option value="">Pilih Barang</option>
                    @foreach ($barangs as $barang)
                        <option value="{{ $barang->id }}" data-harga="{{ $barang->harga }}">{{ $barang->nama_barang }} (Rp
                            {{ number_format($barang->harga, 0, ',', '.') }})</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
            </div>

            <!-- Tampilkan total harga di sini -->
            <div class="form-group">
                <label for="total_harga">Total Harga:</label>
                <span id="total_harga">Rp 0</span>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script>
        // Mendapatkan elemen-elemen yang diperlukan
        const barangSelect = document.getElementById('barang_id');
        const jumlahInput = document.getElementById('jumlah');
        const totalHargaSpan = document.getElementById('total_harga');

        // Mendengarkan perubahan pada elemen-elemen yang diperlukan
        barangSelect.addEventListener('change', updateTotalHarga);
        jumlahInput.addEventListener('input', updateTotalHarga);

        function updateTotalHarga() {
            const selectedOption = barangSelect.options[barangSelect.selectedIndex];
            const harga = selectedOption.getAttribute('data-harga');
            const jumlah = parseInt(jumlahInput.value) || 0;
            const totalHarga = harga * jumlah;

            totalHargaSpan.textContent = 'Rp ' + totalHarga.toLocaleString('id-ID');
        }
    </script>
@endsection
