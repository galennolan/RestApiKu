<?php

namespace App\Http\Controllers;

use App\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    public function index()
    {
        $poli = Poli::all();
        return response()->json($poli);

        // $poli = Poli::all();
        // return $produks->toArray();
    }

    public function show($id)
    {
        $poli = Poli::findOrFail($id);
        return response()->json($poli);

        // $poli = Poli::findOrFail($id);
        // return $poli->toArray();
    }

    public function store(Request $request)
    {
        $poli = Poli::create($request->all());
        return response()->json($poli, 201);

        // $produk = Produk::create($request->all());
        // return response ($produk->toArray(),201);
    }

    public function update(Request $request, $id)
    {
        $poli = Poli::findOrFail($id);
        $poli->update($request->all());
        return response()->json( $poli);

        // $produk = Produk::findOrFail($id);
        // $produk->update($request->all());
        // return response ($produk->toArray());
    }

    public function destroy($id)
    {
        $poli = Poli::findOrFail($id);
        $poli->delete();
        return response()->json( $poli);

        // $poli = Poli::findOrFail($id);
        // $poli->delete();
        // return response ($poli->toArray());
    }
}
