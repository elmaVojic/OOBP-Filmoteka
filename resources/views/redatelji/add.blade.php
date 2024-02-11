<!-- DODAJ NOVOG REDATELJA-->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodavanje novog redatelja') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <form method="POST" action="{{ route('store_redatelja') }}">
                        @csrf
                        <div>
                            <label for="ime" value="{{ __('Ime') }}" >{{ __('Ime redatelja') }}</label>
                            <input id="ime" class="block mt-1 w-full" type="text" name="ime" required autofocus />
                        </div>
                        <div class="mt-4">
                            <label for="prezime" value="{{ __('Prezime') }}" >{{ __('Prezime redatelja') }}</label>
                            <input id="prezime" class="block mt-1 w-full" type="text" name="prezime" required autofocus />
                        </div>
                        <div class="mt-4">
                            <label for="datum_rodenja" value="{{ __('Datum_rodenja') }}" >{{ __('Datum rođenja') }}</label>
                            <input id="datum_rodenja" class="block mt-1 w-full" type="date" name="datum_rodenja" required autofocus />
                        </div>
                        <div class="mt-4">
                            <label for="drzava" value="{{ __('Drzava') }}">{{ __('Država porijekla') }}</label>
                            <input id="drzava" class="block mt-1 w-full" type="text" name="drzava" required autofocus />
                        </div>

                        
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ms-4">
                                {{ __('Spremi') }}
                             </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>