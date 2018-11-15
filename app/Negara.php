<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    //
    protected $table='tbl_negara';
    protected $primaryKey='id_ngr';
    public $timestamps = false;

    public function pegawai()
    {
       return $this->hasMany('App\Pegawai'); 
    }
}
