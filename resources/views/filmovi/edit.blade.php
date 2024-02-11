<!-- UREDI FILM-->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Uređivanje podataka o filmu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                @foreach ($filmovi as $film)
                    <form method="POST" action="{{ route('update_film') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$film->id}}"/>

                        <div>
                            <label for="naslov" value="{{ __('Naslov filma') }}">{{ __('Naslov') }}</label>
                            <input id="naslov" class="block mt-1 w-full" type="text" name="naslov" value="{{$film->naslov}}" required autofocus />
                        </div> 

                        <div class="mt-4">
                            <label for="godina" value="{{ __('Godina') }}">{{ __('Godina') }}</label>
                            <input id="godina" class="block mt-1 w-full" type="date" name="godina" value="{{$film->godina}}" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="ocjena" value="{{ __('Ocjena') }}">{{ __('Ocjena') }}</label>
                            <input id="ocjena" class="block mt-1 w-full" type="text" name="ocjena" value="{{$film->ocjena}}" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="trajanje" value="{{ __('Trajanje') }}">{{ __('Trajanje') }}</label>
                            <input id="trajanje" class="block mt-1 w-full" type="text" name="trajanje" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]" placeholder="HH:MM:SS" value="{{$film->trajanje}}" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="zanr" value="{{ __('Zanr') }}">{{ __('Žanr') }}</label>
                            <select id="zanr" class="block mt-1 w-full" name="zanr">
                                <option>Odaberi: </option>
                                @foreach($zanrovi as $zanr)
                                    <option value="{{$zanr->id}}"
                                        @if($film->zanr==$zanr->id) selected
                                        @endif>{{$zanr->naziv}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4">
                            <label for="redatelj" value="{{ __('Redatelj') }}">{{ __('Redatelj') }}</label>
                            <select id="redatelj" class="block mt-1 w-full" name="redatelj">
                                <option>Odaberi: </option>
                                @foreach($redatelji as $redatelj)
                                    <option value="{{$redatelj->id}}"
                                        @if($film->redatelj==$redatelj->id) selected
                                        @endif>{{$redatelj->ime}}</option>
                                @endforeach
                            </select>
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