<?php

namespace App\Http\Controllers;

use App\Agama;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agama =Agama::all();
        return view('agama.tampil', compact('agama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('agama.create');
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
        $agama = new Agama;
        $agama-> nmagama = $request ->nmagama;
        $agama-> save();

        return redirect ('agama');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function show(Agama $agama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $agama =Agama::find($id);
        return view('agama.edit', compact('agama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $agama = \App\Agama::find($id);
        $agama-> nmagama = $request ->nmagama;
        $agama-> save();

        return redirect ('agama');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $agama = Agama::find($id);
        $agama->delete();

        return redirect('agama');
    }
}
