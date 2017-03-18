<?php
Route::get('pengguna','penggunaController@awal');
Route::get('pengguna/tambah','penggunaController@tambah');


Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','dosenController@tambah');

Route::get('mahasiswa','mahasiswacontroller@awal');
Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');

Route::get('ruangan','ruangancontroller@awal');
Route::get('ruangan/tambah','ruangancontroller@tambah');

Route::get('matakuliah','matakuliahcontroller@awal');
Route::get('matakuliah/tambah','matakuliahcontroller@tambah');

Route::get('dosenmatakuliah','dosenmatakuliahcontroller@awal');
Route::get('dosenmatakuliah/tambah','dosenmatakuliahcontroller@tambah');

Route::get('jadwalmatakuliah','jadwalmatakuliahcontroller@awal');
Route::get('jadwalmatakuliah/tambah','jadwalmatakuliahcontroller@tambah');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
	return view('welcome');
});
Route::get('hello-world', function () {
    return 'Hello World';
});
Route::get('pengguna/{pengguna}', function ($pengguna) {
    return "Hello-world dari $pengguna" ;
});
Route::get('kelas_b/framework/{mhs?}', function ($mhs="Anonim") {
    return 'Selamat Datang $mhs';
});
