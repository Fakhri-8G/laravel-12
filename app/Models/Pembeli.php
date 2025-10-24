<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembeli extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_pembeli', 'jenis_kelamin', 'telepon'];
    public $timestamps = true;

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
