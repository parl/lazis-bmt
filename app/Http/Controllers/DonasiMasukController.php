<?php

namespace App\Http\Controllers;

use App\Models\Donasi_masuk;
use App\Models\Muzaki;
use App\Models\Ref_jenis_donasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DonasiMasukController extends Controller
{
    //
    public function get()
    {
        $donasi_masuk = Donasi_masuk::select('donasi_masuk.*', 'muzaki.muzakiNama', 'ref_jenis_donasi.jnsdonasiNama')
            ->join('muzaki', 'muzaki.id', '=', 'donasi_masuk.donasiMuzakiId')
            ->join('ref_jenis_donasi', 'ref_jenis_donasi.id', '=', 'donasi_masuk.donasiJenisId')
            ->get();
        // dd($donasi_masuk);
        return view('donasiMasuk.donasiMasuk', ['donasi_masuk' => $donasi_masuk, 'page' => 'donasi_masuk']);
    }

    public function create()
    {
        $data = [
            'muzaki' => Muzaki::get(),
            'ref_jenis_donasi' => Ref_jenis_donasi::get(),
            'page' => 'donasi_masuk'
        ];
        return view('donasiMasuk.inputDonasiMasuk', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "donasiMuzakiId" => "required|string",
            "donasiJenisId" => "required|string",
            "donasiNominal" => "required|string",
            "donasiTanggal" => "required|date",
        ]);
        $fields = $validator->validated();
        $fields['donasiUserAdd'] = auth()->user()->name;
        // dd($fields);
        Donasi_masuk::create($fields);

        return redirect('donasi-masuk');
    }

    public function delete($id)
    {
        Donasi_masuk::where('id', '=', $id)->delete();

        return redirect('donasi-masuk');
    }

    public function update($id)
    {
        $data = [
            'donasi_masuk' => Donasi_masuk::where('id', '=', $id)->first(),
            'muzaki' => Muzaki::get(),
            'ref_jenis_donasi' => Ref_jenis_donasi::get(),
            'page' => 'donasi_masuk'
        ];
        // dd($data);
        return view('donasiMasuk.updateDonasiMasuk', $data);
    }

    public function updateDonasiMasuk(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            "id" => "required|uuid",
        ]);
        if ($validator->fails()) {
            return response()->json($request, 400);
        };
        $fields = $validator->validated();
        $validator2 = Validator::make($request->all(), [
            "donasiMuzakiId" => "required|string",
            "donasiJenisId" => "required|string",
            "donasiNominal" => "required|string",
            "donasiTanggal" => "required|date",
        ]);
        $fields2 = $validator2->validated();
        $donasi_masuk = Donasi_masuk::where('id', '=', $fields['id'])->first();
        if (!$donasi_masuk) {
            return response()->json(["error" => "Donasi masuk tidak ditemukan"], 400);
        }
        $fields2['donasiUserUpdate'] = auth()->user()->name;
        $donasi_masuk->update($fields2);
        return redirect('donasi-masuk');
    }
}
