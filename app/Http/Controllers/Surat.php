<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Novay\WordTemplate\Facade as TemplateSurat;

class Surat extends Controller
{
    public function surat()
    {
        $file = public_path('/surat/test.rtf');

		$array = array(
			'[NAMA]' => 'Test Nama',
			// '[PERUSAHAAN]' => 'CV. Borneo Teknomedia',
			// '[NAMA]' => 'Melani Malik',
			// '[NIP]' => '6472065508XXXX',
			// '[ALAMAT]' => 'Jl. Manunggal Gg. 8 Loa Bakung, Samarinda',
			// '[PERMOHONAN]' => 'Permohonan pengurusan pembuatan NPWP',
			// '[KOTA]' => 'Samarinda',
			// '[DIRECTOR]' => 'Noviyanto Rahmadi',
			// '[TANGGAL]' => date('d F Y'),
		);

		$nama_file = 'TES.doc';
        $surat = TemplateSurat::export($file, $array, $nama_file);
        return $surat;
    }
}
