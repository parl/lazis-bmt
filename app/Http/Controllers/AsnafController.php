<?php

namespace App\Http\Controllers;

use App\Models\Ref_asnaf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AsnafController extends Controller
{
    //
    public function get()
    {
        $ref_asnaf = Ref_asnaf::get();
        return view('refAsnaf.refAsnaf', ['ref_asnaf' => $ref_asnaf, 'page' => 'asnaf']);
    }

    public function create()
    {
        return view('refAsnaf.inputAsnaf', ['page' => 'asnaf']);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "asnafNama" => "required|string",
        ]);
        $fields = $validator->validated();
        // dd($fields);
        Ref_asnaf::create($fields);

        return redirect('asnaf');
    }

    public function delete($id)
    {
        Ref_asnaf::where('id', '=', $id)->delete();

        return redirect('asnaf');
    }

    public function update($id)
    {
        $data = Ref_asnaf::where('id', '=', $id)->first();
        return view('refAsnaf.updateAsnaf', ['ref_asnaf' => $data, 'page' => 'asnaf']);
    }

    public function updateAsnaf(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "id" => "required|uuid",
        ]);
        if ($validator->fails()) {
            return response()->json($request, 400);
        };
        $fields = $validator->validated();
        $validator2 = Validator::make($request->all(), [
            "asnafNama" => "required|string",
        ]);
        $fields2 = $validator2->validated();
        $ref_asnaf = Ref_asnaf::where('id', '=', $fields['id'])->first();
        if (!$ref_asnaf) {
            return response()->json(["error" => "Ref asnaf tidak ditemukan"], 400);
        }
        $ref_asnaf->update($fields2);
        return redirect('asnaf');
    }
}
