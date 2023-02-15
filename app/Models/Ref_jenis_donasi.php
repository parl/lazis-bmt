<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_jenis_donasi extends Model
{
    use HasFactory;
    use Uuids;
    protected $table = 'ref_jenis_donasi';
    protected $fillable = [
        'jnsdonasiNama',
    ];

    public function donasi_masuk()
    {
        return $this->hasMany(Donasi_masuk::class, 'donasiJenisId');
    }

    public function donasi_keluar()
    {
        return $this->hasMany(Donasi_keluar::class, 'donasiOutJenisId');
    }
}
