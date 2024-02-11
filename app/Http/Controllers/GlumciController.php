<?php

//CONTROLLER GLUMCI

namespace App\Http\Controllers;
use DB;

use App\Models\Glumci;
use Illuminate\Http\Request;

class GlumciController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $glumci=DB::table('glumci')->orderBy('ime')->get();

        return view('glumci.index', ['glumci'=> $glumci]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nagrade = DB::table('nagrade')
            ->get();

        return view('glumci.add', ['nagrade' => $nagrade]);
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

        DB::table('glumci')->insert([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'datum_rodenja' => $request->datum_rodenja,
            'drzava' => $request->drzava,
            'ocjena' => $request->ocjena,
            'nagrade' => $request->nagrade,
        ]);

        return redirect()->route('glumci');
    }

    /**
     * Display the specified resource.
     */
    public function show(Glumci $glumci)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id=$request->id;

        $glumci=DB::table('glumci')
        ->where('id', $id)
        ->get();

        $nagrade =DB::table('nagrade')
        ->get();

        return view('glumci.edit', ['glumci' => $glumci, 'nagrade' => $nagrade]);
    }

    public function delete(Request $request, Glumci $glumci)
    {
        $id = $request->input('id');
        Glumci::destroy($id);
     
        return redirect()->route('glumci');
    }


    public function update(Request $request)
    {
        $id=$request->id;

        $request->validate([
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'drzava' => 'required|string|max:50',
        ]);

        $update_query=DB::table('glumci')
        ->where('id',$id)
        ->update([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'datum_rodenja' => $request->datum_rodenja,
            'drzava' => $request->drzava,
            'ocjena' => $request->ocjena,
            'nagrade' => $request->nagrade,
        ]);

        return redirect()->route('glumci');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Glumci $glumci)
    {
        //
    }
}
