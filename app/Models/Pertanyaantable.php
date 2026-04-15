<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertanyaantable extends Model
{
     protected $table = 'pertanyaan';
    protected $primaryKey = 'id_pertanyaan';

    protected $fillable = [
        'pertanyaan_teks',
        'id_kuis',
    ];

    public function kuis()
    {
        return $this->belongsTo(Kuistable::class, 'id_kuis');
    }

    public function pilihan()
    {
        return $this->hasMany(Pilihantable::class, 'id_pertanyaan');
    }
}
