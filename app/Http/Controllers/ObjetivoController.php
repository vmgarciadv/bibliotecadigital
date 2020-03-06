<?php

namespace QA\Http\Controllers;

use Illuminate\Http\Request;
use QA\Objetivo;

class ObjetivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $objetivo = new Objetivo;
        $objetivo->nombre = $request->nombre;
        $objetivo->tesis_id = $request->tesis_id;
        $objetivo->usuario_id = $request->usuario_id;
        $objetivo->objetivo_id = $request->objetivo_id;
        $objetivo->obsobj_id = $request->obsobj_id;
        $objetivo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Objetivo::where('id', $id)->get();
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
        $objetivo = Objetivo::findOrFail($id);
        $objetivo->nombre = $request->nombre;
        $objetivo->tesis_id = $request->tesis_id;
        $objetivo->usuario_id = $request->usuario_id;
        $objetivo->objetivo_id = $request->objetivo_id;
        $objetivo->obsobj_id = $request->obsobj_id;
        $objetivo->update();
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
    }
}
