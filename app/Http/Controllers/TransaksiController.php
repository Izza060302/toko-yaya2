<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $title = "Transaksi";
        return view('transaksi.index', compact('title'));
    }

    public function create()
    {
        # code...
    }

    public function store(Request $request)
    {
        # code...
    }

    public function show()
    {
        $title = "Detail Transaksi";
        return view('transaksi.show', compact('title'));
    }

    public function edit()
    {
        $title = "Form Edit Transaksi";
        return view('transaksi.edit', compact('title'));
    }

    public function update(Request $request)
    {
        # code...
    }

    public function destroy()
    {
        # code...
    }

}
