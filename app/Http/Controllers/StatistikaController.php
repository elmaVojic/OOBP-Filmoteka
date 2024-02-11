<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Statistika;
use Illuminate\Http\Request;

class StatistikaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ispisati popis svih nagrada (abecedno) i kategorija za koju se dodjeljuju
        $nagrade_kategorije = DB::table('nagrade')
        ->select('nagrade.naziv as naziv', 'nagrade.kategorija as kategorija')
        ->orderBy('nagrade.naziv', 'asc')
        ->get();

        // Ispisati naslove svih filmova (abecedno) koji pripadaju zanru Akcija ili Krimi
        $zanr_filma = DB::table('filmovi')
            ->select('filmovi.naslov as naslov', 'filmovi.zanr as zanr')
            ->join('zanrovi', 'zanr', '=', 'zanrovi.id')
            ->whereIn('zanrovi.naziv', ['Akcija', 'Krimi'])
            ->orderBy('filmovi.naslov', 'asc')
            ->get();

        // Ispisati ime i prezime svih glumaca koji su dobili nagradu do 2020. godine
        $glumci_nagrade = DB::table('glumci')
            ->select('glumci.ime as ime', 'glumci.prezime as prezime', 'nagrade.naziv as naziv')
            ->join('nagrade', 'glumci.nagrade', '=', 'nagrade.id')
            ->whereYear('nagrade.godina', '<=', 2020)
            ->get();

        // Ispisati broj nagrada koje je dobio redatelj za svoje filmove (ako nema nagrada ne ispisuje se)
        $broj_nagrada_po_redatelju = DB::table('redatelji')
            ->select('redatelji.id as redatelji_id', 'redatelji.ime as ime_redatelja', 'redatelji.prezime as prezime_redatelja', DB::raw('count(nagrade.id) as broj_nagrada'))
            ->leftJoin('filmovi', 'redatelji.id', '=', 'filmovi.redatelj')
            ->leftJoin('nagrade', 'filmovi.id', '=', 'nagrade.film')
            ->groupBy('redatelji.id', 'redatelji.ime', 'redatelji.prezime')
            ->havingRaw('broj_nagrada > 0')
            ->get();

        // Ispisati broj nagrada koje je dobio redatelj za svoje filmove, naziv nagrade i filma za koji je nagrada
        $naziv_nagrada_po_redatelju = DB::table('redatelji')
            ->select('redatelji.id as redatelji_id', 'redatelji.ime as ime_redatelja', 'redatelji.prezime as prezime_redatelja', 
                     'filmovi.naslov as naslov_filma', 'nagrade.naziv as naziv_nagrade', DB::raw('count(nagrade.id) as broj_nagrada'))
            ->leftJoin('filmovi', 'redatelji.id', '=', 'filmovi.redatelj')
            ->leftJoin('nagrade', 'filmovi.id', '=', 'nagrade.film')
            ->groupBy('redatelji.id', 'redatelji.ime', 'redatelji.prezime', 'filmovi.naslov', 'nagrade.naziv')
            ->havingRaw('broj_nagrada > 0')
            ->get();

        // Ispisati glumce i redatelje iz iste drzave, gdje glumci imaju ocjenu iznad 4
        $glumci_i_redatelji = DB::table('glumci')
            ->select('glumci.ime as ime_glumca', 'glumci.prezime as prezime_glumca', 'glumci.ocjena as ocjena_glumca',
                    'redatelji.ime as ime_redatelja', 'redatelji.prezime as prezime_redatelja', 'glumci.drzava')
            ->join('redatelji', 'glumci.drzava', '=', 'redatelji.drzava')
            ->where('glumci.ocjena', '>', 4)
            ->orderBy('glumci.drzava', 'desc')
            ->get();

        return view('statistika.index', 
            ['nagrade_kategorije' => $nagrade_kategorije,
            'zanr_filma' => $zanr_filma,
            'glumci_nagrade' => $glumci_nagrade,
            'broj_nagrada_po_redatelju' => $broj_nagrada_po_redatelju,
            'naziv_nagrada_po_redatelju' => $naziv_nagrada_po_redatelju,
            'glumci_i_redatelji' => $glumci_i_redatelji
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Statistika $statistika)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statistika $statistika)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Statistika $statistika)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statistika $statistika)
    {
        //
    }
}
