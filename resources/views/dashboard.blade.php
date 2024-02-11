<!-- STRANICA početna -->

<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('FILMOTEKA') }}
        <br><span class="float-right text-sm text-gray-600">{{ date('D, d M Y H:i') }}</span>
    </h2>
</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="mt-8">
                    <p class="mt-4">Projekt "FILMOTEKA" je usmjeren na razvoj Laravel aplikacije koja funkcionalno obuhvata sistam za upravljanje 
                        filmotekom. Aplikacija sadrži stranice (module) za vođenje evidencije o filmovima, glumcima, redateljima i žanrovima. 
                        Pored navedenog, aplikacija uključuje i modul za statističke analize i upite koji omogućuje korisnicima pristup 
                        relevantnim podacima. <br><br>
                    </p>
                </div>


                <!-- Naslovna slika ili pozadina -->
                <div class="mb-8">
                    <img src="/images/zaNaslovnu.jpg" class="mx-auto rounded-lg">
                </div>

                <!-- Ostale informacije -->
                <div class="mt-8">
                    <p class="mt-4">
                        Kroz razvoj sistema, cilj je stvoriti kompleksnu, ali intuitivnu platformu koja olakšava upravljanje filmskim sadržajem,
                        pružajući korisnicima relevantne informacije i alate za analizu. Aplikacija je dizajnirana s naglaskom na korisničko
                        iskustvo i funkcionalnost, osiguravajući da korisnici mogu učinkovito pregledavati, pretraživati i analizirati podatke 
                        vezane uz filmove, glumce, redatelje ili žanrove.<br><br>
                        Sama integracija Laravela i odgovarajućih tehnologija za frontend, kreira sistem koji zadovoljava potrebe korisnika u 
                        kontekstu upravljanja filmotekom.                
                    </p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
