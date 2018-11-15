<?php

namespace App\Http\Controllers;

use App\Darah;
use Illuminate\Http\Request;

class DarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $darah = Darah::all();
        return view('darah.tampil', compact('darah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('darah.create');
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
        $darah = new Darah;
        $darah-> nama_gol_darah = $request ->nama_gol_darah;
        $darah-> save();

        return redirect ('darah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Darah  $darah
     * @return \Illuminate\Http\Response
     */
    public function show(Darah $darah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Darah  $darah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $darah =Darah::find($id);
        return view('darah.edit', compact('darah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Darah  $darah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $darah = \App\Darah::find($id);
        $darah-> nama_gol_darah = $request ->nama_gol_darah;
        $darah-> save();

        return redirect ('darah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Darah  $darah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $darah = Darah::find($id);
        $darah->delete();

        return redirect('darah');
    }
}
