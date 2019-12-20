<?php

namespace App\Http\Controllers;

use App\cabin;
use Illuminate\Http\Request;

class CabinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('cabin/index');
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
		$datosCabin=request()->except('_token');
		cabin::insert($datosCabin);
		return response()->json($datosCabin);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cabin  $cabin
     * @return \Illuminate\Http\Response
     */
    public function show(cabin $cabin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cabin  $cabin
     * @return \Illuminate\Http\Response
     */
    public function edit(cabin $cabin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cabin  $cabin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cabin $cabin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cabin  $cabin
     * @return \Illuminate\Http\Response
     */
    public function destroy(cabin $cabin)
    {
        //
    }

    public function vote(Request $request){
		$datosCabin=request()->except('_token','location');
		cabin::insert($datosCabin);
		return response()->json($datosCabin);
    }
}
