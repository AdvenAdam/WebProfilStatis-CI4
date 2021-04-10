<?php

namespace App\Controllers;

use App\Controllers\Data;

use App\Controllers\BaseController;

class Profil extends BaseController
{
	protected $data;
	function __construct()
	{
		$this->data = new Data();
	}
	public function index()
	{
		$data = [
			'title' => 'PTIK:PROFIL',
		];
		return view('profil/Profil', $data);
	}
	public function strukturOrganisasi()
	{
		$data = [
			'title' => 'PTIK : STRUKTUR ORGANISASI',
		];
		return view('profil/Struktur', $data);
	}
	public function visiMisiTujuan()
	{
		$item = $this->data->dataVisiMisi();
		foreach ($item as $i) {
			$visi = $i['visi'];
			$misi = $i['misi'];
			$tujuan = $i['tujuan'];
		}
		$data = [
			'title' => 'PTIK : VISI MISI TUJUAN',
			'visi'	=> $visi,
			'misi'	=> $misi,
			'tujuan' => $tujuan,
		];
		return view('Profil/VisiMisi', $data);
	}
}
