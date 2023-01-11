<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Surat;
use Novay\WordTemplate\Facade as TemplateSurat;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.sm.suratkematian');
    }
    public function suratadmin()
    {
        $smm = Surat::all()->sortByDesc("id");;
        return view('dashboard.pages.surat',['smm' => $smm]);
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
        $smm = new Surat();
        $smm->nama = $request->nama;
        $smm->tempatl = $request->tempatl;
        $smm->tanggall= $request->tanggall;
        $smm->jk= $request->jk;
        $smm->alamat= $request->alamat;
        $smm->br = $request->br;
        $smm->tglm= $request->tglm;
        $smm->tempatm= $request->tempatm;
        $smm->penyebabm= $request->penyebabm;
        $smm->nosuratdesa = '---/---/--/202-';
        $smm->nosuratbr = '---/Kawil.--/--/202-';
        $smm->tglsuratbr = 'tt-bb-TTTT';
        $smm->tglsuratdesa = date('d-m-Y');
        $smm->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $smm= Surat::find($id);
        $file = public_path('/surat/test4.rtf');

		$array = array(
			'[nosuratdesa]' => $smm->nosuratdesa,
			'[nama]' => $smm->nama,
			'[tempatl]' => $smm->tempatl,
			'[tanggall]' => $smm->tanggall,
			'[jk]' => $smm->jk,
			'[alamat]' => $smm->alamat,
			'[br]' => $smm->br,
			'[nosuratbr]' => $smm->nosuratbr,
			'[tglsuratbr]' => $smm->tglsuratbr,
            '[tglm]' => $smm->tglm,
			'[tempatm]' => $smm->tempatm,
			'[penyebabm]' => $smm->penyebabm,
            '[tglsuratdesa]' => $smm->tglsuratdesa,
		);

		$nama_file = 'Suratkematian.doc';
        $surat = TemplateSurat::export($file, $array, $nama_file);
        return $surat;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function download()
    {
        $file = public_path('/surat/test4.rtf');

		$array = array(
			'[nosuratdesa]' => '34 / XII / 2023',
			'[nama]' => 'Borneo Teknomedia3',
			'[tempatl]' => 'Buahan3',
			'[tanggall]' => '12-12-2023',
			'[jk]' => 'Laki-Laki3',
			'[alamat]' => 'Br. Buahan Kangin3',
			'[br]' => 'buahan kangin3',
			'[nosuratbr]' => '234 / XII / 2023',
			'[tglsuratbr]' => '13-12-2023',
            '[tglm]' => '12-12-2023',
			'[tempatm]' => 'Rumah Sehat3',
			'[penyebabm]' => 'Terlalu Sehat3',
            '[tglsuratdesa]' => '14-12-2023',
		);

		$nama_file = 'Suratkematian.doc';
        $surat = TemplateSurat::export($file, $array, $nama_file);
        return $surat;
    }
}
