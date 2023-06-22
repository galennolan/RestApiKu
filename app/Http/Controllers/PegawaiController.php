<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return response()->json($pegawai);
    }

    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return response()->json($pegawai);
    }

    public function store(Request $request)
    {
        $pegawai = Pegawai::create($request->all());
        return response()->json($pegawai, 201);
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($request->all());
        return response()->json($pegawai);
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return response()->json($pegawai);
    }
}

