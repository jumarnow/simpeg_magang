<?php

namespace App\Http\Controllers;

use App\Keluarga;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $keluarga =Keluarga::all();
        return view('keluarga.tampil', compact('keluarga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('keluarga.create');
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
        $keluarga = new keluarga;
        $keluarga-> nmstatusk = $request ->status;
        $keluarga-> save();

        return redirect ('keluarga');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function show(Keluarga $keluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $keluarga =Keluarga::find($id);
        return view('keluarga.edit', compact('keluarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $keluarga = \App\Keluarga::find($id);
        $keluarga-> nmstatusk = $request ->status;
        $keluarga-> save();

        return redirect ('keluarga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $keluarga = Keluarga::find($id);
        $keluarga->delete();

        return redirect('keluarga');
    }
}