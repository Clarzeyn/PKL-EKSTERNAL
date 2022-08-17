<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $table = 'penduduks';
    protected $fillable = ['nama', 'nik', 'agama', 'jenis_kelamin', 'alamat', 'tgl_lahir', 'status', 'id_rts'];
    protected $hidden;

}
