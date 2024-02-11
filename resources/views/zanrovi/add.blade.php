<!-- DODAJ NOVI ŽANR-->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodavanje novog žanra') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <form method="POST" action="{{ route('store_zanr') }}">
                        @csrf
                        <div>
                            <label for="naziv" value="{{ __('Naziv') }}" >{{ __('Naziv žanra') }}</label>
                            <input id="naziv" class="block mt-1 w-full" type="text" name="naziv" required autofocus />
                        </div>
                        <div class="mt-4">
                            <label for="popularnost" value="{{ __('Popularnost') }}" >{{ __('Popularnost žanra') }}</label>
                            <input id="popularnost" class="block mt-1 w-full" type="text" name="popularnost" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="glumci" value="{{ __('Glumac') }}">{{ __('Glumac') }}</label>
                            <select id="glumci" class="block mt-1 w-full" name="glumci">
                                <optionselected="true" disabled="disabled">Odaberi: </option>
                                @foreach($glumci as $glumac)
                                    <option value="{{$glumac->id}}">{{$glumac->ime}}</option>
                                @endforeach
                            </select>
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