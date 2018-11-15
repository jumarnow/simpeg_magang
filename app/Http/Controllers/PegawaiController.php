<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\Agama;
use App\Negara;
use App\Darah;
use App\Keluarga;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd('masuk');
        $pegawai=Pegawai::all();
        return view('pegawai.tampil', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $agama =Agama::all();
        $negara =Negara::all();
        $darah =Darah::all();
        $keluarga =Keluarga::all();
        return view('pegawai.tambah' , compact('agama', 'negara', 'darah', 'keluarga'));
        
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
        // dd('msk');
        $pegawai = new Pegawai;
        $pegawai->nip = $request ->nip;
        $pegawai->nama = $request ->nama;
        $pegawai->tmpt_lahir = $request ->tmpt_lahir;
        $pegawai->tgl_lahir = $request ->tgl_lahir;
        $pegawai->jenis_kelamin = $request ->jenis_kelamin;
        $pegawai->agama_id = $request ->agama_id;
        $pegawai->negara_id = $request ->negara_id;
        $pegawai->gol_darah_id = $request ->gol_darah_id;
        $pegawai->skeluarga_id = $request ->skeluarga_id;
        $pegawai->alamat = $request ->alamat;        
        $pegawai->foto = $request ->foto;
        $pegawai->nohp = $request ->nohp;        
        
        $pegawai->save();
        return redirect ('pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pegawai = Pegawai::find($id);
        return view ('pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $pegawai = Pegawai::find($id);
        $agama =Agama::all();
        $negara =Negara::all();
        $darah =Darah::all();
        $keluarga =Keluarga::all();
        return view ('pegawai.edit', compact('pegawai', 'agama', 'negara', 'darah', 'keluarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pegawai = \App\Pegawai::find($id);
        $pegawai->nip = $request ->nip;
        $pegawai->nama = $request ->nama;
        $pegawai->tmpt_lahir = $request ->tmpt_lahir;
        $pegawai->tgl_lahir = $request ->tgl_lahir;
        $pegawai->jenis_kelamin = $request ->jenis_kelamin;
        $pegawai->agama_id = $request ->agama_id;
        $pegawai->negara_id = $request ->negara_id;
        $pegawai->gol_darah_id = $request ->gol_darah_id;
        $pegawai->skeluarga_id = $request ->skeluarga_id;
        $pegawai->alamat = $request ->alamat;        
        $pegawai->foto = $request ->foto;
        $pegawai->nohp = $request ->nohp;  
        $pegawai->save();  


        return redirect('pegawai');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pegawai = Pegawai::find($id);
        $pegawai->delete();

        return redirect('pegawai');
    }
    public function pdf()
    {
        $pegawai=Pegawai::all();
        $pdf = PDF::loadView('pegawai.pdf', ['pegawai'=>$pegawai]);
        return $pdf->download('pegawai.pdf');
    }
}
