<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return response()->json($produks);

        // $produks = Produk::all();
        // return $produks->toArray();
    }

    public function show($id)
    {
        // $produk = Produk::findOrFail($id);
        // return response()->json(['data' => $produk]);

        $produk = Produk::findOrFail($id);
        return $produk->toArray();
    }

    public function store(Request $request)
    {
        // $produk = Produk::create($request->all());
        // return response()->json(['data' => $produk], 201);

        $produk = Produk::create($request->all());
        return response ($produk->toArray(),201);
    }

    public function update(Request $request, $id)
    {
        // $produk = Produk::findOrFail($id);
        // $produk->update($request->all());
        // return response()->json(['data' => $produk]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());
        return response ($produk->toArray());
    }

    public function destroy($id)
    {
        // $produk = Produk::findOrFail($id);
        // $produk->delete();
        // return response()->json(['data' => $produk]);

        $produk = Produk::findOrFail($id);
        $produk->delete();
        return response ($produk->toArray());
    }
}
