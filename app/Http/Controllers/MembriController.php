<?php

namespace App\Http\Controllers;

use App\Membri;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class MembriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membri = Membri::latest()->get();

        return view('membri.index',compact('membri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('membri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $membru = request()->validate([
            'nume' => 'required|max:100',
            'prenume' => 'required|max:100',
            'descriere' => 'required',
            'foto' => 'required'
        ]);

        $nume = $request['nume'];
        $prenume = $request['prenume'];

        $file = request()->file('foto');
        $ext = $file->extension();
        $poza = $file->storeAs("membru","{$nume}_{$prenume}.{$ext}","public");

         Membri::forceCreate([
            'nume' => $nume,
            'prenume' => $prenume,
            'descriere' => $request['descriere'],
            'foto' => $poza
         ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Membri  $membri
     * @return \Illuminate\Http\Response
     */
    public function show(Membri $membri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Membri  $membri
     * @return \Illuminate\Http\Response
     */
    public function edit(Membri $membri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Membri  $membri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membri $membri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Membri  $membri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membri $membri)
    {
        //
    }
}
