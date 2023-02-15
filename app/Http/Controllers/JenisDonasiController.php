<?php

namespace App\Http\Controllers;

use App\Models\Muzaki;
use App\Models\Ref_jenis_donasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JenisDonasiController extends Controller
{
    //
    public function get()
    {
        $ref_jenis_donasi = Ref_jenis_donasi::get();
        // dd($muzaki);
        return view('refJenisDonasi.refJenisDonasi', ['ref_jenis_donasi' => $ref_jenis_donasi, 'page' => 'jenis_donasi']);
    }

    public function create()
    {
        return view('refJenisDonasi.inputJenisDonasi', ['page' => 'jenis_donasi']);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "jnsdonasiNama" => "required|string",
        ]);
        $fields = $validator->validated();
        // dd($fields);
        Ref_jenis_donasi::create($fields);

        return redirect('jenis-donasi');
    }

    public function delete($id)
    {
        Ref_jenis_donasi::where('id', '=', $id)->delete();

        return redirect('jenis-donasi');
    }

    public function update($id)
    {
        $data = Ref_jenis_donasi::where('id', '=', $id)->first();
        return view('refJenisDonasi.updateJenisDonasi', ['ref_jenis_donasi' => $data, 'page' => 'jenis_donasi']);
    }

    public function updateJenisDonasi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "id" => "required|uuid",
        ]);
        if ($validator->fails()) {
            return response()->json($request, 400);
        };
        $fields = $validator->validated();
        $validator2 = Validator::make($request->all(), [
            "jnsdonasiNama" => "required|string",
        ]);
        $fields2 = $validator2->validated();
        $ref_jenis_donasi = Ref_jenis_donasi::where('id', '=', $fields['id'])->first();
        if (!$ref_jenis_donasi) {
            return response()->json(["error" => "Ref jenis donasi tidak ditemukan"], 400);
        }
        $ref_jenis_donasi->update($fields2);
        return redirect('jenis-donasi');
    }
}
