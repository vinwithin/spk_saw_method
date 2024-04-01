<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'tb_nilai';
    // protected $primaryKey = 'id';

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'id_alternatif');
    }
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria');
    }
}
