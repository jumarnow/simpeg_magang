<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    //
    protected $table='pendidikan';
    public $timestamps = false;

    public function pegawai()
    {
       return $this->belongsTo('App\Pegawai', 'pegawai_id', 'id'); 
    }
}
