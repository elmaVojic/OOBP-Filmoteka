<?php

//CONTROLLER REDATELJI

namespace App\Http\Controllers;
use DB;

use App\Models\Redatelji;
use Illuminate\Http\Request;

class RedateljiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $redatelji=DB::table('redatelji')
        ->get();

        return view('redatelji.index', ['redatelji'=> $redatelji]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('redatelji.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'drzava' => 'required|string|max:50',
        ]);

        DB::table('redatelji')->insert([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'datum_rodenja' => $request->datum_rodenja,
            'drzava' => $request->drzava,
        ]);

        return redirect()->route('redatelji');
    }

    /**
     * Display the specified resource.
     */
    public function show(Redatelji $redatelji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id=$request->id;

        $redatelji=DB::table('redatelji')
        ->where('id', $id)
        ->get();

        return view('redatelji.edit', ['redatelji'=>$redatelji]);
    }

    public function delete(Request $request, Redatelji $redatelji)
    {
        $id = $request->input('id');
        Redatelji::destroy($id);
     
        return redirect()->route('redatelji');
    }


    public function update(Request $request)
    {
        $id=$request->id;

        $request->validate([
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'drzava' => 'required|string|max:50',
        ]);

        $update_query=DB::table('redatelji')
        ->where('id', $id)
        ->update([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'datum_rodenja' => $request->datum_rodenja,
            'drzava' => $request->drzava,
        ]);

        return redirect()->route('redatelji');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Redatelji $redatelji)
    {
        //
    }
}
