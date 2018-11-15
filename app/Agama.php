<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    //
    // protected $table='tbl_agama';
    // protected $primaryKey='id_agm';
    // public $timestamps = false;

    protected $table='tbl_agama';
    protected $primaryKey='id_agm';
    public $timestamps = false;

    public function pegawai()
    {
       return $this->hasMany('App\Pegawai'); 
    }
}
