<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruangancontroller extends Controller
{
 public function awal()
 {
	 return "hello dari rungancontroller";
 }
 public function tambah()
 {
	 return $this->simpan();
 }
 public function simpan()
 {
	 $ruangan = new ruangan();
	 $ruangan->title = 'kelasb2015';
	 $ruangan->save();
	 return "data rungan dengan judul {$ruangan->title} telah disimpan";
 }
}
