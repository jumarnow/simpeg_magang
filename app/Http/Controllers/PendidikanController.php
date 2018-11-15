<?php

namespace App\Http\Controllers;

use App\Pendidikan;
use App\Pegawai;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pegawai = Pegawai::find($id);
        return  view('pendidikan.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        
        $pendidikan = new Pendidikan;
        $pendidikan-> t_pdk = $request ->t_pdk;
        $pendidikan-> d_pdk = $request ->d_pdk;
        $pendidikan-> pegawai_id = $request ->pegawai_id;
        $pendidikan-> save();

        return redirect ('/pegawai/'.$pendidikan->pegawai_id.'/pendidikan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function show(Pendidikan $pendidikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pendidikan = Pendidikan::find($id);
        return view('pendidikan.edit', compact('pendidikan','pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pendidikan = \App\Pendidikan::findOrFail($id);
        $pendidikan-> t_pdk = $request ->t_pdk;
        $pendidikan-> d_pdk = $request ->d_pdk;
        $pendidikan-> pegawai_id = $request ->pegawai_id;
        $pendidikan-> save();

        return redirect ('/pegawai/'.$pendidikan->pegawai_id.'/pendidikan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pendidikan = Pendidikan::find($id);
        $pendidikan->delete();

        return redirect('/pegawai/'.$pendidikan->pegawai_id.'/pendidikan');
    }

    public function pel($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pendidikan.create', ['pegawai' => $pegawai]);
    }
}
