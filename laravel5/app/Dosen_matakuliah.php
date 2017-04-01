<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_matakuliah extends Model
{
    protected $table = 'Dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

    public function dosen(){
    	return $this->belongsTo(Dosen::class);
    }
    public function matakuliah(){
    	return $this->belongsTo(Matakuliah::class);
    }
    public  function jadwal_matakuliah(){
    	return $this->hasMany(Jadwal_matakuliah::class); //one to Many dari dosen matakuiah (one) ke Jadwal matakuliah (many)
    }
}

