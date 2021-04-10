<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Berita extends BaseController
{
	protected $data;
	function __construct()
	{
		$this->data = new Data();
	}
	public function index($id)
	{
		$berita = $this->data->dataBerita();
		if (empty($berita[$id])) {
			return redirect()->to('/');
		}
		$data = [
			'title' => $berita[$id]['judul'],
			'tanggal' => $berita[$id]['tanggal'],
			'gambar' => $berita[$id]['gambar'],
			'author' => $berita[$id]['author'],
			'isi' => $berita[$id]['isi'],
		];
		return view('Berita/Berita', $data);
	}
}
