<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class telepon extends Model
{
    protected $fillable = ['id', 'nomor_telepon', 'id_pengguna'];

    public function Pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
}
