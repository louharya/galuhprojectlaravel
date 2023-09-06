<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['pembeli_id', 'barang_id', 'jumlah'];

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
