<?php

namespace App\Http\Controllers;

use App\Models\Muzaki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MuzakiController extends Controller
{
    //
    public function get()
    {
        $muzaki = Muzaki::get();
        // dd($muzaki);
        return view('muzaki.muzaki', ['muzaki' => $muzaki, 'page' => 'muzaki']);
    }

    public function create()
    {
        return view('muzaki.inputMuzaki', ['page' => 'muzaki']);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "muzakiNama" => "required|string",
            "muzakiNoHp" => "required|string",
            "muzakiNPWP" => "required|string",
        ]);
        $fields = $validator->validated();
        $fields['muzakiUserAdd'] = auth()->user()->name;
        // dd($fields);
        Muzaki::create($fields);

        return redirect('muzaki');
    }

    public function delete($id)
    {
        Muzaki::where('id', '=', $id)->delete();

        return redirect('muzaki');
    }

    public function update($id)
    {
        $data = Muzaki::where('id', '=', $id)->first();
        return view('muzaki.updateMuzaki', ['muzaki' => $data, 'page' => 'muzaki']);
    }

    public function updateMuzaki(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "id" => "required|uuid",
        ]);
        if ($validator->fails()) {
            return response()->json($request, 400);
        };
        $fields = $validator->validated();
        $validator2 = Validator::make($request->all(), [
            "muzakiNama" => "string",
            "muzakiNoHp" => "string",
            "muzakiNPWP" => "string",
        ]);
        $fields2 = $validator2->validated();
        $muzaki = Muzaki::where('id', '=', $fields['id'])->first();
        if (!$muzaki) {
            return response()->json(["error" => "Muzaki tidak ditemukan"], 400);
        }
        $fields2['muzakiUserUpdate'] = auth()->user()->name;
        $muzaki->update($fields2);
        return redirect('muzaki');
    }
}
