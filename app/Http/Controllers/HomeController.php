<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

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
        $blog = Blog::all();
        return view('client.page.umkmview', ['blog' => $blog]);
    }
}
