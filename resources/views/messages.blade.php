<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formations') }}
        </h2>
        Bonjour {{ auth()->user()->gender }} . {{ auth()->user()->name}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Vous êtes sur votre Dashboard.
                    Vous allez pouvoir retrouver les messages que vous avez envoyés via notre plateforme de contact.
                </div>
            </div>
        </div>
    </div>

    <div class="p-6">
        <h2 class="text-2xl font-semibold mb-4">Informations des Messages</h2>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Vos Messages</h3>
            </div>

            <div class="border-t border-gray-200">
                <dl>
                    @foreach(auth()->user()->messages as $message)
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Message {{ $loop->iteration }}</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $message->message }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>
        </div>
    </div>
    
</x-app-layout>
