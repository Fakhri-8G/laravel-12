<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;


class Mahasiswa extends Model
{
    protected $fillable = ['nama', 'nim'];

    public function wali() 
    {
        return $this->hasOne(Wali::class, 'id_mahasiswa');  
    }
}
