<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\Umkm;
use App\Models\Home;
use App\Models\Asetdesa;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function client()
    {
        $blog = Blog::all()->sortByDesc("id")->take(3);
        $slider = Home::all()->sortByDesc("id");
        return view('client.page.home', ['home' => true, 'blog' => $blog, 'slider' => $slider]);

    }
    public function umkm()
    {
        $umkm = Umkm::all();
        return view('client.page.umkm', ['umkm' => $umkm] );
    }
    public function blog()
    {
        $blog = Blog::all()->sortByDesc("id");
        $hot = Blog::all()->sortByDesc("id")->skip(1)->take(3);
        $first = Blog::all()->sortByDesc("id")->first();
        return view('client.page.blog', ['blog' => $blog, 'hot' => $hot, 'first' => $first]);
    }
    public function profil()
    {
        return view('client.page.profil');
    }
    public function aset()
    {
        $aset = Asetdesa::all();
        return view('client.page.asetdesa', ['aset' => $aset] );
    }
}
