<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Asetdesa;

class AsetController extends Controller
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
        $aset = Asetdesa::all();
        return view('dashboard.pages.aset',['aset' => $aset]);
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
            'fb' => 'required|image',
        ]);
        $file = $request->file('fb');
        $name = $file->getClientOriginalName();
        $name = str_replace(' ', '_', $name);
        $path = $file->storeAs('public/images', $name);

        $image = $path;

        $aset = new Asetdesa();
        $aset->no = $request->no;
        $aset->jb = $request->jb;
        $aset->kb = $request->kb;
        $aset->ib = $request->ib;
        $aset->ab = $request->ab;
        $aset->tp = $request->tp;
        $aset->kt = $request->kt;
        $aset->fb = $image;
        $aset->save();
        return redirect('/admin/aset');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aset = Asetdesa::find($id);
        return view('dashboard.pages.asetupdate', ['aset' => $aset]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'fb' => 'required|image',
        ]);
        $file = $request->file('fb');
        $name = $file->getClientOriginalName();
        $name = str_replace(' ', '_', $name);
        $path = $file->storeAs('public/images', $name);

        $image = $path;

        $aset = Asetdesa::find($id);
        $aset->no = $request->no;
        $aset->jb = $request->jb;
        $aset->kb = $request->kb;
        $aset->ib = $request->ib;
        $aset->ab = $request->ab;
        $aset->tp = $request->tp;
        $aset->kt = $request->kt;
        $aset->fb = $image;
        $aset->save();
        return redirect('/admin/aset');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Asetdesa::find($id);
        Storage::delete($data->fb);
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
    public function asetinput()
    {
        return view('dashboard.pages.asetinput');
    }
}
