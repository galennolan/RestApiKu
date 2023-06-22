<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;

class PasienController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();
        return response()->json($pasien);
    }

    public function show($id)
    {
        $pasien = Pasien::findOrFail($id);
        return response()->json($pasien);
    }

    public function store(Request $request)
    {
        $pasien = Pasien::create($request->all());
        return response()->json($pasien, 201);
    }

    public function update(Request $request, $id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());
        return response()->json($pasien);
    }

    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();
        return response()->json($pasien);
    }
}

