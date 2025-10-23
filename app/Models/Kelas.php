<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
     use HasFactory;

    protected $fillable = ['id', 'nama_kelas'];
    public $timestamps = true;

    public function murids()
    {
        return $this->hasMany(Murid::class, 'id_kelas');
    }
}
