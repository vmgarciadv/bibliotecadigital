<?php

namespace QA\Http\Controllers;

use Illuminate\Http\Request;
use QA\Tesis;


class TesisController extends Controller
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
        $tesis = new Tesis;
        $tesis->nombre = $request->nombre;
        $tesis->autor = $request->autor;
        $tesis->tutor = $request->tutor;
        $tesis->year_publicacion = $request->year_publicacion;
        $tesis->tema_id = $request->tema_id;
        $tesis->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Tesis::where('id', $id)->get();
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
        $tesis = Tesis::findOrFail($id);
        $tesis->nombre = $request->nombre;
        $tesis->autor = $request->autor;
        $tesis->tutor = $request->tutor;
        $tesis->year_publicacion = $request->year_publicacion;
        $tesis->update();
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
