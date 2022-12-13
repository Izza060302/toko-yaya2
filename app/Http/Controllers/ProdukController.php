<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $title = "Produk";
        return view('produk.index', compact('title'));
    }

    public function create()
    {
        $title = "Form Produk Baru";
        return view('produk.create', compact('title'));
    }

    public function sstore(Request $request)
    {
        # code...
    }

    public function show()
    {
        $title = "Foto Produk";
        return view('produk.show', compact('title'));
    }

    public function edit()
    {
        $title = "Form Edit Produk";
        return view('produk.edit', compact('title'));
    }

    public function update(Request $request, $id)
    {
        # code...
    }

    public function destroy($id)
    {
        # code...
    }
}
