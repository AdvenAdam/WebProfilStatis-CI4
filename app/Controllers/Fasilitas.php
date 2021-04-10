<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Fasilitas extends BaseController
{
	protected $data;
	function __construct()
	{
		$this->data = new Data();
	}

	public function index()
	{
		$fasilitas = $this->data->dataFasilitas();
		$data = [
			'title' => 'PTIK : FASILITAS',
			'gambar' => $fasilitas['fasilitas']['gambar'],
			'isi' => $fasilitas['fasilitas']['isi'],
		];
		return view('Fasilitas/Fasilitas', $data);
	}
	public function gedung()
	{
		$fasilitas = $this->data->dataFasilitas();
		$data = [
			'title' => 'PTIK : GEDUNG KULIAH',
			'gambar' => $fasilitas['gedung']['gambar'],
			'isi' => $fasilitas['gedung']['isi'],
		];
		return view('Fasilitas/Fasilitas', $data);
	}
	public function laboratorium()
	{
		$fasilitas = $this->data->dataFasilitas();
		$data = [
			'title' => 'PTIK : LABORATORIUM TIK',
			'gambar' => $fasilitas['laboratorium']['gambar'],
			'isi' => $fasilitas['laboratorium']['isi'],
		];
		return view('Fasilitas/Fasilitas', $data);
	}
	public function perpustakaan()
	{
		$fasilitas = $this->data->dataFasilitas();
		$data = [
			'title' => 'PTIK : PERPUSTAKAAN',
			'gambar' => $fasilitas['perpustakaan']['gambar'],
			'isi' => $fasilitas['perpustakaan']['isi'],
		];
		return view('Fasilitas/Fasilitas', $data);
	}
	public function studio()
	{
		$fasilitas = $this->data->dataFasilitas();
		$data = [
			'title' => 'PTIK : STUDIO MULTIMEDIA',
			'gambar' => $fasilitas['studio']['gambar'],
			'isi' => $fasilitas['studio']['isi'],
		];
		return view('Fasilitas/Fasilitas', $data);
	}
	public function spmb()
	{
		$fasilitas = $this->data->dataFasilitas();
		$data = [
			'title' => 'PTIK : ALUR PENDAFTARAN',
			'gambar' => $fasilitas['spmb']['gambar'],
			'isi' => $fasilitas['spmb']['isi'],
		];
		return view('Fasilitas/Fasilitas', $data);
	}
	public function akreditasi()
	{
		$fasilitas = $this->data->dataFasilitas();
		$data = [
			'title' => 'PTIK : AKREDITASI',
			'gambar' => $fasilitas['akreditasi']['gambar'],
			'isi' => $fasilitas['akreditasi']['isi'],
		];
		return view('Fasilitas/Fasilitas', $data);
	}
}
