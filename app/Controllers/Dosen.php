<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dosen extends BaseController
{
	protected $data;
	function __construct()
	{
		$this->data = new Data();
	}
	public function index()
	{
		$data = [
			'title' 	=> 'Profil Dosen',
			'dosen'		=> $this->data->dataDosen(),
		];
		return view('Dosen/Profil', $data);
	}
}
