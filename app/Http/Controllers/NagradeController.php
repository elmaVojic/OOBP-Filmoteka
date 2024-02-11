<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nagrade;
use DB;

class NagradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Nagrade::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Nagrade::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Nagrade::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $nagrade = Nagrade::find($id);
        $nagrade->update($request->all());

        return $nagrade;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return Nagrade::destroy($id);
    }
}
