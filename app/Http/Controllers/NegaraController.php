<?php

namespace App\Http\Controllers;

use App\Negara;
use Illuminate\Http\Request;

class NegaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $negara =Negara::all();
        return view('negara.tampil', compact('negara'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('negara.create');
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
        $negara = new Negara;
        $negara-> nm_negara = $request ->nm_negara;
        $negara-> save();

        return redirect ('negara');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $negara =Negara::find($id);
        return view('negara.edit', compact('negara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $negara = \App\Negara::find($id);
        $negara-> nm_negara = $request ->nm_negara;
        $negara-> save();

        return redirect ('negara');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $negara = Negara::find($id);
        $negara->delete();

        return redirect('negara');
    }
}
