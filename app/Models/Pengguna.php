<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengguna extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama'];
    public $timestamps = true;

    public function telepons()
    {
        return $this->hasOne(Telepon::class, 'id_pengguna');
    }

}
