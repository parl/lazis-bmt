<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_asnaf extends Model
{
    use HasFactory;
    use Uuids;
    protected $table = 'ref_asnaf';
    protected $fillable = [
        'asnafNama',
    ];

    public function donasi_keluar()
    {
        return $this->hasMany(Donasi_keluar::class, 'donasiOutAsnafId');
    }
}
