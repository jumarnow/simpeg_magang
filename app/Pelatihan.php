<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    //
    protected $table='pelatihan';
    public $timestamps = false;

    public function pegawai()
    {
       return $this->belongsTo('App\Pegawai', 'pegawai_id', 'id'); 
    }
}
