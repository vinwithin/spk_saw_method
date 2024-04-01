<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = 'tb_kriteria';
    protected $primaryKey = 'id';

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
