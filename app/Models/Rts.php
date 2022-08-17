<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rts extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['nama'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    // membuat relasi one to one
    public function penduduk()
    {
        return $this->hasOne(Penduduk::class, 'id_rts');
    }
}
