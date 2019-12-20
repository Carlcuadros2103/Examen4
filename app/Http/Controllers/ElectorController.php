<?php

namespace App\Http\Controllers;

use App\elector;
use Illuminate\Http\Request;

class ElectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/elector/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('elector.create');
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
        return view('/candidate/vote');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\elector  $elector
     * @return \Illuminate\Http\Response
     */
    public function show(elector $elector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\elector  $elector
     * @return \Illuminate\Http\Response
     */
    public function edit(elector $elector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\elector  $elector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, elector $elector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\elector  $elector
     * @return \Illuminate\Http\Response
     */
    public function destroy(elector $elector)
    {
        //
    }
}
