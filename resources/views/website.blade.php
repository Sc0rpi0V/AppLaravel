<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Website') }}
        </h2>
        Bonjour {{ auth()->user()->gender }} . {{ auth()->user()->name}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Vous êtes sur votre Dashboard.
                    Vous allez pouvoir retrouver vos sites que vous avez ajoutés afin d'avoir une expertise de ceux-ci.
                </div>
            </div>
        </div>
    </div>

    <div class="p-6" x-data="siteData()" x-init="init()">
        <button @click="showModal = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
            Ajouter des informations
        </button>
        <h2 class="text-2xl font-semibold mb-4">Informations concernant votre site</h2>
        <div id="site-info" class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Votre Site</h3>
            </div>

            <div class="border-t border-gray-200 p-4">
                <template x-if="siteInfo">
                    <div>
                        <p><strong x-text="siteInfo.siteName"></strong></p>
                        <p x-text="siteInfo.siteDescription"></p>
                        <p x-text="siteInfo.siteUrlName"></p>
                        <p x-text="siteInfo.siteListPlugins"></p>
                        <p x-text="siteInfo.siteType"></p>
                        <p x-text="siteInfo.siteTheme"></p>
                        <p x-text="siteInfo.siteEditor"></p>
                        <button @click="deleteSite" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">
                            Supprimer
                        </button>
                    </div>
                </template>
            </div>
        </div>

        <!-- Modal -->
        <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto" style="display: none;">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true"></span>

                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Ajouter des informations</h3>
                        <form id="addInfoForm">
                            <div>
                                <label for="siteName" class="block text-sm font-medium text-gray-700">Nom du site</label>
                                <input type="text" id="siteName" name="siteName" x-model="siteName" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <br>
                            <div>
                                <label for="siteUrlName" class="block text-sm font-medium text-gray-700">Url du site</label>
                                <input type="text" id="siteUrlName" name="siteUrlName" x-model="siteUrlName" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="mt-4">
                                <label for="siteDescription" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea id="siteDescription" name="siteDescription" x-model="siteDescription" rows="3" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>
                            <div class="mt-4">
                                <label for="siteListPlugins" class="block text-sm font-medium text-gray-700">Liste des plugins</label>
                                <textarea id="siteListPlugins" name="siteListPlugins" x-model="siteListPlugins" rows="3" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>
                            <br>
                            <div>
                                <label for="siteType" class="block text-sm font-medium text-gray-700">Type de site</label>
                                <input type="text" id="siteType" name="siteType" x-model="siteType" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <br>
                            <div>
                                <label for="siteTheme" class="block text-sm font-medium text-gray-700">Thème du site</label>
                                <input type="text" id="siteTheme" name="siteTheme" x-model="siteTheme" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <br>
                            <div>
                                <label for="siteEditor" class="block text-sm font-medium text-gray-700">Éditeur sur votre site</label>
                                <input type="text" id="siteEditor" name="siteEditor" x-model="siteEditor" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </form>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button @click="saveInfo" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">Enregistrer</button>
                        <button @click="showModal = false" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:mt-0 sm:w-auto sm:text-sm">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function siteData() {
        return {
            showModal: false,
            siteName: '',
            siteUrlName: '',
            siteDescription: '',
            siteListPlugins: '',
            siteType: '',
            siteTheme: '',
            siteEditor: '',
            siteInfo: null,

            init() {
                this.fetchSiteInfo();
            },

            fetchSiteInfo() {
                fetch('/get-site-info', {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if(data.success && data.siteInfo) {
                        this.siteInfo = {
                            siteName: data.siteInfo.siteName,
                            siteUrlName: data.siteInfo.siteUrlName,
                            siteDescription: data.siteInfo.siteDescription,
                            siteListPlugins: data.siteInfo.siteListPlugins,
                            siteType: data.siteInfo.siteType,
                            siteTheme: data.siteInfo.siteTheme,
                            siteEditor: data.siteInfo.siteEditor,
                        };
                    }
                });
            },

            saveInfo() {
                fetch('/add-site-info', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        siteName: this.siteName,
                        siteDescription: this.siteDescription,
                        siteUrlName: this.siteUrlName,
                        siteListPlugins: this.siteListPlugins,
                        siteType: this.siteType,
                        siteTheme: this.siteTheme,
                        siteEditor: this.siteEditor,
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        this.siteInfo = { 
                            name: data.siteName, 
                            description: data.siteDescription, 
                            url: data.siteUrlName, 
                            plugins: data.siteListPlugins, 
                            type: data.siteType, 
                            theme: data.siteTheme, 
                            editor: data.siteEditor 
                        };
                        this.showModal = false;
                        this.clearForm();
                    }
                });
            },

            deleteSite() {
                fetch('/delete-site-info', {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        siteName: this.siteInfo.siteName
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        this.siteInfo = null;
                    }
                });
            },

            clearForm() {
                this.siteName = '';
                this.siteDescription = '';
                this.siteUrlName = '';
                this.siteListPlugins = '';
                this.siteType = '';
                this.siteTheme = '';
                this.siteEditor = '';
            }
        }
    }

</script>