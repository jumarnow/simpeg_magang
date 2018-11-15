<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    //
    protected $table='pengalaman';
    public $timestamps = false;

    public function pegawai()
    {
       return $this->belongsTo('App\Pegawai', 'pegawai_id', 'id'); 
    }
}
