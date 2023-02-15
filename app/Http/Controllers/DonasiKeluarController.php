<?php

namespace App\Http\Controllers;

use App\Models\Donasi_keluar;
use App\Models\Ref_asnaf;
use App\Models\Ref_jenis_donasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DonasiKeluarController extends Controller
{
    //
    public function get()
    {
        $donasi_keluar = Donasi_keluar::select('donasi_keluar.*', 'ref_asnaf.asnafNama', 'ref_jenis_donasi.jnsdonasiNama')
            ->join('ref_asnaf', 'ref_asnaf.id', '=', 'donasi_keluar.donasiOutAsnafId')
            ->join('ref_jenis_donasi', 'ref_jenis_donasi.id', '=', 'donasi_keluar.donasiOutJenisId')
            ->get();
        // dd($donasi_masuk);
        return view('donasiKeluar.donasiKeluar', ['donasi_keluar' => $donasi_keluar, 'page' => 'donasi_keluar']);
    }

    public function create()
    {
        $data = [
            'asnaf' => Ref_asnaf::get(),
            'ref_jenis_donasi' => Ref_jenis_donasi::get(),
            'page' => 'donasi_keluar'
        ];
        return view('donasiKeluar.inputDonasiKeluar', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "donasiOutAsnafId" => "required|string",
            "donasiOutJenisId" => "required|string",
            "donasiOutNominal" => "required|string",
            "donasiOutTanggal" => "required|date",
        ]);
        $fields = $validator->validated();
        $fields['donasiOutUserAdd'] = auth()->user()->name;
        // dd($fields);
        Donasi_keluar::create($fields);

        return redirect('donasi-keluar');
    }

    public function delete($id)
    {
        Donasi_keluar::where('id', '=', $id)->delete();

        return redirect('donasi-keluar');
    }

    public function update($id)
    {
        $data = [
            'donasi_keluar' => Donasi_keluar::where('id', '=', $id)->first(),
            'asnaf' => Ref_asnaf::get(),
            'ref_jenis_donasi' => Ref_jenis_donasi::get(),
            'page' => 'donasi_keluar'
        ];
        // dd($data);
        return view('donasiKeluar.updateDonasiKeluar', $data);
    }

    public function updateDonasiKeluar(Request $request)
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
            "donasiOutAsnafId" => "required|string",
            "donasiOutJenisId" => "required|string",
            "donasiOutNominal" => "required|string",
            "donasiOutTanggal" => "required|date",
        ]);
        $fields2 = $validator2->validated();
        $donasi_keluar = Donasi_keluar::where('id', '=', $fields['id'])->first();
        if (!$donasi_keluar) {
            return response()->json(["error" => "Donasi keluar tidak ditemukan"], 400);
        }
        $fields2['donasiOutUserUpdate'] = auth()->user()->name;
        $donasi_keluar->update($fields2);
        return redirect('donasi-keluar');
    }
}
