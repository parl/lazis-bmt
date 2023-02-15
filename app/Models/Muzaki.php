<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muzaki extends Model
{
    use HasFactory;
    use Uuids;
    protected $table = 'muzaki';
    protected $fillable = [
        'muzakiNama',
        'muzakiNoHp',
        'muzakiNPWP',
        'muzakiUserAdd',
        'muzakiUserUpdate',
    ];

    public function donasi_masuk()
    {
        return $this->hasMany(Donasi_masuk::class, 'donasiMuzakiId');
    }
}
