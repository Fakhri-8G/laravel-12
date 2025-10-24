<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class barang extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_barang', 'merek', 'harga', 'stok'];
    public $timestamps = true;

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
