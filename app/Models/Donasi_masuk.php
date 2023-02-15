<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi_masuk extends Model
{
    use HasFactory;
    use Uuids;
    protected $table = 'donasi_masuk';
    protected $fillable = [
        'donasiMuzakiId',
        'donasiJenisId',
        'donasiNominal',
        'donasiTanggal',
        'donasiUserAdd',
        'donasiUserUpdate',
    ];

    public function muzaki()
    {
        return $this->belongsTo(Muzaki::class, 'donasiMuzakiId');
    }
    public function ref_jenis_donasi()
    {
        return $this->belongsTo(Ref_jenis_donasi::class, 'donasiJenisId');
    }
}
