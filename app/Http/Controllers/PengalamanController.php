<?php

namespace App\Http\Controllers;

use App\Pengalaman;
use App\Pegawai;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $pegawai = Pegawai::find($id);        
        return  view('pengalaman.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $pengalaman = new Pengalaman;
        $pengalaman-> nm_pekerjaan = $request ->nm_pekerjaan;
        $pengalaman-> d_pekerjaan = $request ->d_pekerjaan;
        $pengalaman-> pegawai_id = $request ->pegawai_id;
        $pengalaman-> save();

        return redirect ('/pegawai/'.$pengalaman->pegawai_id.'/pengalaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengalaman  $pengalaman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengalaman $pengalaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengalaman  $pengalaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pengalaman = Pengalaman::find($id);
        return view('pengalaman.edit', compact('pengalaman','pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengalaman  $pengalaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pengalaman = \App\Pengalaman::findOrFail($id);
        $pengalaman-> nm_pekerjaan = $request ->nm_pekerjaan;
        $pengalaman-> d_pekerjaan = $request ->d_pekerjaan;
        $pengalaman-> pegawai_id = $request ->pegawai_id;
        $pengalaman-> save();

        return redirect ('/pegawai/'.$pengalaman->pegawai_id.'/pengalaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengalaman  $pengalaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengalaman $pengalaman)
    {
        //
        $pengalaman = Pengalaman::find($id);
        $pengalaman->delete();

        return redirect ('/pegawai/'.$pengalaman->pegawai_id.'/pengalaman');
    }

    public function pel($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pengalaman.create', ['pegawai' => $pegawai]);
    }
}
