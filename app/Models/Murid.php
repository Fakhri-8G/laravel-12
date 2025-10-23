<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    protected $fillable = ['id', 'nama_lengkap', 'jenis_kelamin', 'tanggal_lahir', 'tempat_lahir', 'agama', 'alamat', 'email', 'id_kelas'];

    public function Kelas() 
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');    
    }
}
