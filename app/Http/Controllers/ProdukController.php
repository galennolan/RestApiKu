<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return response()->json(['data' => $produks]);
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return response()->json(['data' => $produk]);
    }

    public function store(Request $request)
    {
        $produk = Produk::create($request->all());
        return response()->json(['data' => $produk], 201);
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->update($request->all());
        return response()->json(['data' => $produk]);
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return response()->json(['data' => $produk]);
    }
}
