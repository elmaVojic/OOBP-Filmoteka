<!-- STRANICA FILMOVI -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('FILMOVI') }}
        </h2>
    </x-slot>

    <div class="bg-gray-400 border-b border-gray-100 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-end mt-4">
                <form method="GET" action="\dodaj_film">
                    <x-button class="ms-4">
                        {{ __('DODAJ NOVI FILM') }}
                    </x-button>
                </form>
            </div>
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-center font-semibold text-xl font-bold text-blue-600"><br>POPIS FILMOVA</h1><br><hr><br>

                    @foreach ($filmovi as $film)
                    <div class="flex space-x-4">
                        
                        <div class="flex-1"><p class="p-2"> {{$film->naslov}}  -  {{$film->godina}}  -  {{$film->ocjena}}</p><hr>
                        </div>
                        
                        <div class="flex-1">
                            <form method="POST" action="{{ route('uredi_film') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$film->id}}">
                            <div class="p-2">
                                <x-button class="ms-4 bg-red-500">
                                        {{ __('UREDI') }}
                                </x-button>
                            </div>
                            </form>
                        </div>

                        <div class="flex-1">
                            <form method="POST" action="{{ route('dodajFile') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$film->id}}">
                            <div class="p-2">
                                <x-button class="ms-4 bg-red-500">
                                    {{ __('DODAJ FILE') }}
                                </x-button>
                            </div>
                            </form>
                        </div>

                        <div class="flex-1">
                            <form method="POST" action="{{ route('obrisi_film') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$film->id}}">
                            <div class="p-2">
                                <x-button class="ms-4 bg-red-500">
                                    {{ __('OBRIŠI') }}
                                </x-button>
                            </div>
                            </form>
                        </div>

                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
