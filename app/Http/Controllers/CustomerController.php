<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $title = "Data Customer";
        return view('customer.index', compact('title'));
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
        # code...
    }

    public function edit()
    {
        $title = "Form Edit Customer";
        return view('customer.edit', compact('title'));
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