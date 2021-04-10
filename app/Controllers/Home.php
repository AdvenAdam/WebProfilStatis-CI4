<?php

namespace App\Controllers;

use App\Controllers\Data;


class Home extends BaseController
{
	protected $data;
	function __construct()
	{
		$this->data = new Data();
	}

	public function index()
	{
		$data = [
			'title'		=> 'PTIK V2.0',
			'slider'	=> $this->data->dataSlider(),
			'dosen'		=> $this->data->dataDosen(),
			'berita'	=> $this->data->dataBerita(),
			'mitra'		=> $this->data->dataMitra(),
		];
		return view('Home/Home', $data);
	}
}
