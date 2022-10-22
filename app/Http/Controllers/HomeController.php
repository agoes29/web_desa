<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\Umkm;

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
        return view('client.page.umkm', ['blog' => $blog], );
    }
    public function blog()
    {
        $blog = Blog::all()->sortByDesc("id");
        $hot = Blog::all()->sortByDesc("id")->skip(1)->take(2);
        $first = Blog::all()->sortByDesc("id")->first();
        return view('client.page.blog', ['blog' => $blog, 'hot' => $hot, 'first' => $first]);
    }
}
