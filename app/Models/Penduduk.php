<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    public $table = 'penduduks';
    public $fillable = ['nama', 'nik', 'agama', 'jenis_kelamin', 'alamat', 'tgl_lahir', 'status', 'id_rts'];

    public function rts()
    {
        return $this->belongsTo(Rts::class, 'id_rts');
    }

}
