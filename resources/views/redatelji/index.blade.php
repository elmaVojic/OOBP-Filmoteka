<!-- STRANICA REDATELJI -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('REDATELJI') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-end mt-4">
                <form method="GET" action="\dodaj_redatelja">
                    <x-button class="ms-4">
                        {{ __('DODAJ REDATELJA') }}
                    </x-button>
                </form>
            </div>


            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h3 class="text-center font-semibold text-xl font-bold text-blue-600"><br>POPIS REDATELJA </h3><br> <hr><br>   

                @foreach ($redatelji as $redatelj)
                <div class="flex space-x-4">
                        <div class="flex-1"><p class="p-2"> {{$redatelj->ime}}  -  {{$redatelj->prezime}}  -  {{$redatelj->drzava}}</p><hr>
                        </div>
                        
                        <div class="flex-1">
                            <form method="POST" action="{{ route('uredi_redatelja') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$redatelj->id}}">
                            <div class="p-2">
                                <x-button class="ms-4 bg-red-500">
                                        {{ __('UREDI') }}
                                </x-button>
                            </div>
                            </form>
                        </div>

                        <div class="flex-1">
                            <form method="POST" action="{{ route('obrisi_redatelja') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$redatelj->id}}">
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
