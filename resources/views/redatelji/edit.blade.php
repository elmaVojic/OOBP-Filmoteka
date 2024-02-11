<!-- UREDI REDATELJA-->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Uređivanje podataka o redateljima') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                @foreach ($redatelji as $redatelj)
                    <form method="POST" action="{{ route('update_redatelja') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$redatelj->id}}"/>
                        <div>
                            <label for="ime" value="{{ __('Ime') }}" >{{ __('Ime redatelja') }}</label>
                            <input id="ime" class="block mt-1 w-full" type="text" name="ime" value="{{$redatelj->ime}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <label for="prezime" value="{{ __('Prezime') }}" >{{ __('Prezime redatelja') }}</label>
                            <input id="prezime" class="block mt-1 w-full" type="text" name="prezime" value="{{$redatelj->prezime}}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <label for="datum_rodenja" value="{{ __('Datum_rodenja') }}" >{{ __('Datum rođenja') }}</label>
                            <input id="datum_rodenja" class="block mt-1 w-full" type="date" name="datum_rodenja" value="{{$redatelj->datum_rodenja}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <label for="drzava" value="{{ __('Drzava') }}">{{ __('Država porijekla') }}</label>
                            <input id="drzava" class="block mt-1 w-full" type="text" name="drzava" value="{{$redatelj->drzava}}" required autofocus />
                        </div> 
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Spremi') }}
                            </x-button>
                        </div>
                    </form>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>