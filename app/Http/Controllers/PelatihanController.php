<?php

namespace App\Http\Controllers;

use App\Pelatihan;
use App\Pegawai;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pegawai = Pegawai::find($id);
        return  view('pelatihan.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pelatihan = new Pelatihan;
        $pelatihan-> tgl_pelatihan = $request ->tgl_pelatihan;
        $pelatihan-> topik_pelatihan = $request ->topik_pelatihan;
        $pelatihan-> pegawai_id = $request ->pegawai_id;
        $pelatihan-> save();

        return redirect ('/pegawai/'.$pelatihan->pegawai_id.'/pelatihan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $pelatihan = Pelatihan::find($id);
        return view('pelatihan.edit', compact('pelatihan','pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pelatihan = \App\Pelatihan::findOrFail($id);
        $pelatihan-> tgl_pelatihan = $request ->tgl_pelatihan;
        $pelatihan-> topik_pelatihan = $request ->topik_pelatihan;
        $pelatihan-> pegawai_id = $request ->pegawai_id;
        $pelatihan-> save();

        return redirect ('/pegawai/'.$pelatihan->pegawai_id.'/pelatihan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pelatihan = Pelatihan::find($id);
        $pelatihan->delete();

        return redirect('/pegawai/'.$pelatihan->pegawai_id.'/pelatihan');
    }

    public function pel($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pelatihan.create', ['pegawai' => $pegawai]);
    }
}
