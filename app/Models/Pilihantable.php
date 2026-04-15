<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pilihantable extends Model
{
     protected $table = 'pilihan';
    protected $primaryKey = 'id_pilihan';

    protected $fillable = [
        'pilihan_text',
        'pilihan_benar',
        'id_pertanyaan',
    ];

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaantable::class, 'id_pertanyaan');
    }
}
