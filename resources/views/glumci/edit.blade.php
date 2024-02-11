<!-- UREDI GLUMCA-->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Uređivanje podataka o glumcima') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                @foreach ($glumci as $glumac)
                    <form method="POST" action="{{ route('update_glumca') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$glumac->id}}"/>
                        <div>
                            <label for="ime" value="{{ __('Ime') }}" >{{ __('Ime glumca') }}</label>
                            <input id="ime" class="block mt-1 w-full" type="text" name="ime" value="{{$glumac->ime}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <label for="prezime" value="{{ __('Prezime') }}" >{{ __('Prezime glumca') }}</label>
                            <input id="prezime" class="block mt-1 w-full" type="text" name="prezime" value="{{$glumac->prezime}}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <label for="datum_rodenja" value="{{ __('Datum_rodenja') }}" >{{ __('Datum rođenja') }}</label>
                            <input id="datum_rodenja" class="block mt-1 w-full" type="date" name="datum_rodenja" value="{{$glumac->datum_rodenja}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <label for="drzava" value="{{ __('Drzava') }}">{{ __('Država porijekla') }}</label>
                            <input id="drzava" class="block mt-1 w-full" type="text" name="drzava" value="{{$glumac->drzava}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <label for="ocjena" value="{{ __('Ocjena') }}">{{ __('Ocjena') }}</label>
                            <input id="ocjena" class="block mt-1 w-full" type="text" name="ocjena" value="{{$glumac->ocjena}}" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="nagrade" value="{{ __('Nagrade') }}">{{ __('Nagrade') }}</label>
                            <select id="nagrade" class="block mt-1 w-full" name="nagrade">
                                <option>Odaberi: </option>
                                @foreach($nagrade as $nagrada)
                                    <option value="{{$nagrada->id}}"
                                        @if($glumac->nagrade==$nagrada->id) selected
                                        @endif>{{$nagrada->naziv}}</option>
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