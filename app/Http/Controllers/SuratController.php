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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $file = public_path('/surat/suratkematian.rtf');

		$array = array(
			'[nosuratdesa]' => '34 / XII / 2022',
			'[nama]' => 'Borneo Teknomedia',
			'[tempatl]' => 'Buahan',
			'[tanggall]' => '12-12-2022',
			'[jk]' => 'Laki-Laki',
			'[alamat]' => 'Br. Buahan Kangin',
			'[br]' => 'buahan kangin',
			'[nosuratbr]' => '234 / XII / 2022',
			'[tglsuratbr]' => '13-12-2022',
            '[tglm]' => '12-12-2022',
			'[tempatm]' => 'Rumah Sehat',
			'[penyebabm]' => 'Terlalu Sehat',
            '[tglsuratdesa]' => '14-12-2022',
		);

		$nama_file = 'SuratKematian.doc';
        $surat = TemplateSurat::export($file, $array, $nama_file);
        return $surat;
    }
}
