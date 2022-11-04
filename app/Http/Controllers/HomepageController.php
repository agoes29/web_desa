<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use App\Models\Umkm;
use App\Models\Home;
use Illuminate\Support\Str;

class HomepageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Home::all();
        return view('dashboard.pages.homeslider', ['slide' => $slide]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image',

        ]);
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $name = str_replace(' ', '_', $name);
        $path = $file->storeAs('public/images', $name);

        $image = $path;
        $home = new Home();
        $home->image = $image;
        $home->save();
        return redirect('/admin/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slide = Home::find($id);
        return view('dashboard.pages.homeupdate', ['slide' => $slide]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = Home::find($id);
        return view('dashboard.pages.homeupdate', ['slide' => $slide]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image',
        ]);
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $name = str_replace(' ', '_', $name);
        $path = $file->storeAs('public/images', $name);

        $image = $path;

        $home = Home::find($id);

        $home->image = $image;
        $home->save();
        return redirect('/admin/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Home::find($id);
        Storage::delete($data->image);
        $data->delete();

        if ($data) {
            return redirect()->back()->with([
                'success' => 'Data Berhasil Dihapus'
            ]);
        } else {
            return redirect()->back()->with([
                'error' => 'Terjadi Kesalahan'
            ]);
        }
    }

    public function homeinput()
    {
        return view('dashboard.pages.homeinput');
    }
}
