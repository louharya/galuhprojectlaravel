<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $fillable = ['nama', 'alamat'];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
