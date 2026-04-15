<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuistable extends Model
{
     protected $table = 'kuis';

    protected $primaryKey = 'id_kuis';

    protected $fillable = [
        'nama_kuis',
        'tema_kuis',
        'is_default',
        'id_user',
    ];

    public $timestamps = true;



    public function pertanyaan()
{
    return $this->hasMany(Pertanyaantable::class, 'id_kuis');
}

// public function riwayat()
// {
//     return $this->hasMany(Riwayat::class, 'id_kuis');
// } ini nanti di tambah ketika udah ada branch baru (bermainkuisbranch)
}
