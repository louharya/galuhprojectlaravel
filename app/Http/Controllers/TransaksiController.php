<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;
use App\Models\Barang;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua transaksi beserta relasi pembeli dan barang
        $transaksis = Transaksi::with('pembeli', 'barang')->get();

        // Menampilkan daftar transaksi ke view transaksi.index
        return view('transaksi.index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil semua data pembeli dan barang
        $pembelis = Pembeli::all();
        $barangs = Barang::all();

        // Menampilkan form untuk membuat transaksi ke view transaksi.create
        return view('transaksi.create', compact('pembelis', 'barangs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'pembeli_id' => 'required|exists:pembelis,id',
            'barang_id' => 'required|exists:barangs,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Simpan transaksi sementara ke dalam database
        $transaksi = new Transaksi();
        $transaksi->pembeli_id = $request->pembeli_id;
        $transaksi->barang_id = $request->barang_id;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->save();

        // Redirect kembali ke halaman pembuatan transaksi dengan pesan sukses
        return redirect()->route('transaksi.create')->with('success', 'Transaksi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Mengambil detail transaksi beserta relasi pembeli dan barang
        $transaksi = Transaksi::with('pembeli', 'barang')->findOrFail($id);

        // Menampilkan detail transaksi ke view transaksi.show
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Mengambil transaksi yang akan diedit beserta data pembeli dan barang
        $transaksi = Transaksi::findOrFail($id);
        $pembelis = Pembeli::all();
        $barangs = Barang::all();

        // Menampilkan form edit transaksi ke view transaksi.edit
        return view('transaksi.edit', compact('transaksi', 'pembelis', 'barangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input dari form edit
        $request->validate([
            'pembeli_id' => 'required|exists:pembelis,id',
            'barang_id' => 'required|exists:barangs,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Update transaksi yang sudah ada
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->pembeli_id = $request->pembeli_id;
        $transaksi->barang_id = $request->barang_id;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->save();

        // Redirect ke halaman daftar transaksi dengan pesan sukses
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Hapus transaksi berdasarkan ID
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        // Redirect ke halaman daftar transaksi dengan pesan sukses
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus');
    }
}
