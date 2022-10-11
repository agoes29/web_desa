<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function client()
    {
        return view('client.page.home', [
            'home' => true
        ]);
    }
    public function umkm()
    {
        return view('client.page.umkm');
    }
}
