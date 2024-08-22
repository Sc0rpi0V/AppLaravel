<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Newsletter') }}
        </h2>
        Bonjour Mr. {{ auth()->user()->name }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Vous êtes sur votre Dashboard.
                    Vous allez pouvoir retrouver les formations que vous avez sélectionnées.
                </div>
            </div>
        </div>
    </div>

    <div class="p-6">
        <h2 class="text-2xl font-semibold mb-4">Informations de Newsletter</h2>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Newsletters présentes</h3>
            </div>

            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Date de Soumission</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $latestSubmission && $latestSubmission->submitted_at ? $latestSubmission->submitted_at->format('d/m/Y H:i') : 'Aucune soumission' }}
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Première Newsletter</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            <strong>{{ $firstNewsletter['title'] }}</strong><br>
                            {{ $firstNewsletter['subtitle'] }}
                        </dd>
                        <button id="dlnewsletter" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
                            Télécharger la newsletter
                        </button>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-app-layout>
