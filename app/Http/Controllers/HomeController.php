<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function client()
    {
        return view('client.page.home', [
            'home' => true,
        ]);
    }

    public function umkm()
    {
        $blog = DB::select('select * from blog');

        return view('client.page.umkm', ['blog' => $blog]);
    }
}
