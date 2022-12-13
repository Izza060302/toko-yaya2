<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $title = "Kategori Produk";
        return view('kategori.index', compact('title'));
    }

    public function create()
    {
        $title = "Form kategori";
        return view('kategori.create', compact('title'));
    }

    public function store(Request $request)
    {
        # code...
    }

    public function show($id)
    {
        # code...
    }

    public function edit()
    {
        $title = "Form Edit Kategori";
        return view('kategori.edit', compact('title'));
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