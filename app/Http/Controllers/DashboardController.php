<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Donasi_keluar;
use App\Models\Donasi_masuk;
use App\Models\Muzaki;
use App\Models\Pegawai;
use App\Models\Ref_asnaf;
use App\Models\Store;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function get()
    {
        $muzaki = Muzaki::get();
        $jumlah_muzaki = $muzaki->count();

        $asnaf = Ref_asnaf::get();
        $jumlah_asnaf = $asnaf->count();

        $donasi_masuk = Donasi_masuk::get();
        $jumlah_donasi_masuk = 0;
        if ($donasi_masuk) {
            foreach ($donasi_masuk as $dm) {
                $jumlah_donasi_masuk += $dm->donasiNominal;
            }
        }

        $donasi_keluar = Donasi_keluar::get();
        $jumlah_donasi_keluar = 0;
        if ($donasi_keluar) {
            foreach ($donasi_keluar as $dk) {
                $jumlah_donasi_keluar += $dk->donasiOutNominal;
            }
        }

        return view('welcome', ['jumlah_muzaki' => $jumlah_muzaki, 'jumlah_donasi_masuk' => $jumlah_donasi_masuk,  'jumlah_donasi_keluar' => $jumlah_donasi_keluar, 'jumlah_asnaf' => $jumlah_asnaf, 'page' => 'dashboard']);
    }
}
