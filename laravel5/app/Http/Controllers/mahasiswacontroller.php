<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;
use App\Pengguna;

class MahasiswaController extends Controller
{
    public function semua_mahasiswa(){
        $mahasiswa = mahasiswa::all();
        foreach ($mahasiswa as $mhs) {
           
            echo "Nama: ".$mhs->nama;
            echo "<br>";
            echo "username: ".$mhs->pengguna->username;
            echo "<p>";
    }
}
public function mahasiswa () {
    $mahasiswa = mahasiswa::find(7);
    echo "nama :" .$mahasiswa->nama;
    echo "<br>";
    echo "username :" .$mahasiswa->pengguna->username;
}
    public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = "Vamilu Yovan Saputra";
    	$mahasiswa->nim = "1515015063";
    	$mahasiswa->alamat = "jln trisari";
    	$mahasiswa->pengguna_id = 3;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
}
}
