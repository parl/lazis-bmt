<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi_keluar extends Model
{
    use HasFactory;
    use Uuids;
    protected $table = 'donasi_keluar';
    protected $fillable = [
        'donasiOutAsnafId',
        'donasiOutJenisId',
        'donasiOutNominal',
        'donasiOutTanggal',
        'donasiOutUserAdd',
        'donasiOutUserUpdate',
    ];

    public function ref_asnaf()
    {
        return $this->belongsTo(Ref_asnaf::class, 'donasiOutAsnafId');
    }
    public function ref_jenis_donasi()
    {
        return $this->belongsTo(Ref_jenis_donasi::class, 'donasiOutJenisId');
    }
}
