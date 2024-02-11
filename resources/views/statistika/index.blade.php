<!-- STRANICA ZA UPITE -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('STATISTIKA - UPITI') }}
        </h2>
    </x-slot>

    <div class="bg-gray-400 border-b border-gray-100 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-center font-semibold text-xl font-bold text-blue-600"><br>POPIS UPITA</h1><br><hr><br>

            <div class="grid grid-cols-4 gap-4 p-4 justify-items-center">
                    
            <div>
                <h1><b>Upit 1.   Ispisati popis svih nagrada (abecedno) i kategorija za koju se dodjeljuju</b></h1> <hr/>
                @foreach($nagrade_kategorije as $nagrada) 
                    <p>{{$loop->iteration}}. {{$nagrada->naziv}} - {{$nagrada->kategorija}}</p>
                @endforeach
                <hr><br>
            </div>

            <div>
                <h1><b>Upit 2.   Ispisati naslove svih filmova (abecedno) koji pripadaju zanru Akcija ili Krimi</b></h1><hr>
                @foreach($zanr_filma as $film)
                    <p>{{ $loop->iteration }}. {{ $film->naslov }}</p>
                @endforeach
                <hr><br>
            </div>

            <div>
                <h1><b>Upit 3.   Ispisati ime i prezime svih glumaca koji su dobili nagradu do 2020. godine</b></h1><hr>
                    @foreach($glumci_nagrade as $glumac)
                        <p>{{ $loop->iteration }}. {{ $glumac->ime }} {{ $glumac->prezime }} - {{ $glumac->naziv }}</p>
                    @endforeach
                    <hr><br>
            </div>

            <div>
                <h1><b>Upit 4.   Ispisati broj nagrada koje je dobio redatelj za svoje filmove (ako nema nagrada ne ispisuje se)</b></h1><hr>
                    @foreach($broj_nagrada_po_redatelju as $redatelj)
                        <p>{{ $loop->iteration }}. {{ $redatelj->ime_redatelja }} {{ $redatelj->prezime_redatelja }} - {{ $redatelj->broj_nagrada }}</p>
                    @endforeach
                <hr><br>
            </div>

            <div>
                <h1><b>Upit 5.   Ispisati broj nagrada koje je dobio redatelj za svoje filmove, naziv nagrade i filma za koji je nagrada</b></h1><hr>
                    @foreach($naziv_nagrada_po_redatelju as $redatelj)
                        <p>{{ $loop->iteration }}. Redatelj: {{ $redatelj->ime_redatelja }} {{ $redatelj->prezime_redatelja }} - {{ $redatelj->broj_nagrada }} , 
                           Film: {{ $redatelj->naslov_filma }} , Naziv nagrade: {{ $redatelj->naziv_nagrade }}</p>
                    @endforeach
                <hr><br>
            </div>

            <div>
                <h1><b>Upit 6.   Ispisati glumce i redatelje koji su iz iste drzave i gdje glumci imaju ocjenu iznad 4</b></h1><hr>
                    @foreach($glumci_i_redatelji as $osoba)
                        <p>{{ $osoba->drzava }} - {{ $osoba->ime_glumca }} {{ $osoba->prezime_glumca }} - {{ $osoba->ime_redatelja }}
                            {{ $osoba->prezime_redatelja }}</p>
                    @endforeach
                <hr><br>
            </div>

            <div>
                <h1><b>Upit 7.   </b></h1><hr>
                    
                <hr><br>
            </div>


            </div>
        </div>
    </div>
</div>
</x-app-layout>
