<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Paiements Methods') }}
        </h2>
        Bonjour {{ auth()->user()->gender }} .  {{ auth()->user()->name }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Vous êtes sur votre Dashboard.
                    Vous allez pouvoir retrouver les moyens de paiements que vous avez sélectionnées.
                </div>
            </div>
        </div>
    </div>

    <div class="p-6" x-data="paiementData()">
        <button @click="showModalPaiement = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
            Ajouter un mode de paiement
        </button>
        <h2 class="text-2xl font-semibold mb-4">Informations de Paiements</h2>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Méthodes de paiements</h3>
            </div>

            <div class="border-t border-gray-200">
                <template x-if="paiementInfo">
                    <div>
                        <p><strong x-text="paiementInfo.iban"></strong></p>
                        <p x-text="paiementInfo.bic"></p>
                        <p x-text="paiementInfo.bankName"></p>
                        <button @click="deletePaiement" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">
                            Supprimer
                        </button>
                    </div>
                </template>
            </div>
        </div>

        <!-- Modal -->
        <div x-show="showModalPaiement" class="fixed z-10 inset-0 overflow-y-auto" style="display: none;">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true"></span>

                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Ajouter des informations de paiement</h3>
                        <form id="addInfoFormPaiement">
                            <!-- RIB Information -->
                            <div>
                                <label for="iban" class="block text-sm font-medium text-gray-700">Numéro IBAN</label>
                                <input type="text" id="iban" name="iban" x-model="iban" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="FR76 30003 03620 00020216907 50">
                            </div>
                            <br>
                            <div>
                                <label for="bic" class="block text-sm font-medium text-gray-700">Code BIC</label>
                                <input type="text" id="bic" name="bic" x-model="bic" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="AGRIFRPP">
                            </div>
                            <br>
                            <div>
                                <label for="bankName" class="block text-sm font-medium text-gray-700">Nom de la banque</label>
                                <input type="text" id="bankName" name="bankName" x-model="bankName" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Votre banque">
                            </div>
                        </form>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button @click="saveInfoPaiement" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">Enregistrer</button>
                        <button @click="showModalPaiement = false" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:mt-0 sm:w-auto sm:text-sm">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function paiementData(data) {
        return {
            showModalPaiement: false,
            iban: '',
            bic: '',
            bankName: '',
            paiementInfo: null,

            saveInfoPaiement() {
                fetch('/add-paiement-info', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        iban: this.iban,
                        bic: this.bic,
                        bankName: this.bankName,
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        this.paiementInfo = {
                            iban: data.iban,
                            bic: data.bic,
                            bankName: data.bankName,
                        };
                        this.showModalPaiement = false;
                        this.clearForm();
                    }
                });
            },

            deletePaiementInfo() {
                fetch('/delete-paiement-info', {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        bic: this.bic.name
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        this.paiementInfo = null;
                    }
                });
            },


            clearForm() {
                this.iban = '';
                this.bic = '';
                this.bankName = '';
            }
        }
    }

</script>