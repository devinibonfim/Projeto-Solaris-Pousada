<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeluxeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('room.deluxe');
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

    public function valueCalc(Request $request){
        /**/
        $beginDate = strtotime($request->input('beginDate'));
        $endDate = strtotime($request->input('endDate'));
        $diff = round(($endDate - $beginDate)/86400); //diferenca entre datas
        
        $quartos = $request->input('room');
        $pessoas = $request->input('peoples');

        $value = 170; // preco do quarto
        
        $resul = $diff * ($quartos * $value);

        return redirect("/deluxe")->with('message','Total: '.$resul);
        /**/
    }
}
