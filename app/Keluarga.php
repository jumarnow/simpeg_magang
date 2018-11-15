<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    //
    protected $table='tbl_statusk';
    protected $primaryKey='kdstatusk';
    public $timestamps = false;

    public function pegawai()
    {
       return $this->hasMany('App\Pegawai'); 
    }
}
