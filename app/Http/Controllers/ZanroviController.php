<?php

//CONTROLLER ZANROVI 

namespace App\Http\Controllers;
use DB;

use App\Models\Zanrovi;
use Illuminate\Http\Request;

class ZanroviController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zanrovi=DB::table('zanrovi')->get();

        return view('zanrovi.index', ['zanrovi'=> $zanrovi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $glumci = DB::table('glumci')
            ->get();

        return view('zanrovi.add', ['glumci' => $glumci]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'naziv' => 'required|string|max:255',
        ]);

        DB::table('zanrovi')->insert([
            'naziv' => $request->naziv,
            'popularnost' => $request->popularnost,
            'glumci' => $request->glumci,
        ]);

        return redirect()->route('zanrovi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Zanrovi $zanrovi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id=$request->id;

        $zanrovi=DB::table('zanrovi')
        ->where('id', $id)
        ->get();

        $glumci=DB::table('glumci')
        ->get();

        return view('zanrovi.edit', ['zanrovi'=>$zanrovi, 'glumci' => $glumci]);
    }

    public function delete(Request $request, Zanrovi $zanrovi)
    {
        $id = $request->input('id');
        Zanrovi::destroy($id);
     
        return redirect()->route('zanrovi');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Zanrovi $zanrovi)
    {
        $id=$request->id;

        $request->validate([
            'naziv' => 'required|string|max:255',
        ]);

        $update_query=DB::table('zanrovi')
        ->where('id',$id)
        ->update([
            'naziv' => $request->naziv,
            'popularnost' => $request->popularnost,
            'glumci'=> $request->glumci,
        ]);

        return redirect()->route('zanrovi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zanrovi $zanrovi)
    {
        //
    }
}
