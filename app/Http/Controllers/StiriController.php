<?php

namespace App\Http\Controllers;

use App\Stiri;
use Illuminate\Http\Request;

class StiriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stiri = Stiri::latest()->get();

        return view('stiri.index',compact('stiri'));
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
     * @param  \App\Stiri  $stiri
     * @return \Illuminate\Http\Response
     */
    public function show(Stiri $stiri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stiri  $stiri
     * @return \Illuminate\Http\Response
     */
    public function edit(Stiri $stiri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stiri  $stiri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stiri $stiri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stiri  $stiri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stiri $stiri)
    {
        //
    }
}
