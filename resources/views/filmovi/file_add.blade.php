<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodavanje datoteke za film') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                <form action="/process" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" value = "{{$id}}" name="id">
                    <p>
                        <label for="file">
                            <input type="file" name="file" id="file">
                        </label>
                    </p>
                    <div class="p-2">
                                <x-button class="ml-4 bg-green-700">
                                    {{ __('DODAJ') }}
                                </x-button>
                            </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>