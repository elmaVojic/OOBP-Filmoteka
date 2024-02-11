<?php

//CONTROLLER FILMOVI

namespace App\Http\Controllers;
use DB;

use App\Models\Filmovi;
use Illuminate\Http\Request;

class FilmoviController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $filmovi=DB::table('filmovi')->get();

        return view('filmovi.index', ['filmovi'=> $filmovi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $zanrovi = DB::table('zanrovi')
            ->get();

        $redatelji = DB::table('redatelji')
            ->get();

        return view('filmovi.add', ['zanrovi' => $zanrovi, 'redatelji' => $redatelji]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'naslov' => 'required|string|max:255',
        ]);

        DB::table('filmovi')->insert([
            'naslov' => $request->naslov,
            'godina' => $request->godina,
            'ocjena' => $request->ocjena,
            'trajanje' => $request->trajanje,
            'zanr' => $request->zanr,
            'redatelj' => $request->redatelj,
        ]);

        return redirect()->route('filmovi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Filmovi $filmovi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id=$request->id;

        $filmovi=DB::table('filmovi')
        ->where('id', $id)
        ->get();

        $zanrovi =DB::table('zanrovi')
        ->get();

        $redatelji =DB::table('redatelji')
        ->get();

        return view('filmovi.edit', ['filmovi' => $filmovi, 'zanrovi' => $zanrovi, 'redatelji' => $redatelji]);
    }

    public function delete(Request $request, Filmovi $filmovi)
    {
        $id = $request->input('id');
        Filmovi::destroy($id);
     
        return redirect()->route('filmovi');
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id=$request->id;

        $request->validate([
            'naslov' => 'required|string|max:255',
        ]);

        $update_query=DB::table('filmovi')
        ->where('id',$id)
        ->update([
            'naslov' => $request->naslov,
            'godina' => $request->godina,
            'ocjena' => $request->ocjena,
            'trajanje' => $request->trajanje,
            'zanr' => $request->zanr,
            'redatelj' => $request->redatelj,
        ]);

        return redirect()->route('filmovi');
    }

    
    public function dodajFile(Request $request)
    {
        $id=$request->id;
        
        $filmovi = Filmovi::find($id);

        return view('filmovi.file_add', ['id' => $id , 'filmovi' => $filmovi]);

    }

    public function process(Request $request)
    {
        $id=$request->id;
        
        $filmovi = Filmovi::find($id);

        $folder_to_save = $filmovi->naslov;

        $file = $request->file('file');

        $filename = $filmovi->id . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs($folder_to_save, $filename);

        return redirect()->route('filmovi');

    }






    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filmovi $filmovi)
    {
        //
    }
}
