<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function home()
    {
        $title = 'Home';
        return view('layouts.home', compact('title'));
    }
    
    public function kategori()
    {
        $title = 'Kategori';
        return view('layouts.kategori', compact('title'));
    }
    
    public function kontak()
    {
        $title = 'Kontak';
        return view('layouts.kontak', compact('title'));
    }

    public function about()
    {
        $title = 'About';
        return view('layouts.about', compact('title'));
    }
}