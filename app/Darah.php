<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darah extends Model
{
    //

    protected $table='tbl_gol_darah';
    protected $primaryKey='id_darah';
    public $timestamps = false;

    public function pegawai()
    {
       return $this->hasMany('App\Pegawai'); 
    }
}
