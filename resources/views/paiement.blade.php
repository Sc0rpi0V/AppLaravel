@vite('resources/css/app.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        
        @include('_nav')
        <div class="max-w-7xl mx-auto p-6 lg:p-8" style="margin-top: 90px;">
            <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-12">Paiement de votre commande</h1>

            <div class="flex">
                <div class="w-1/2 pr-6">
                    <h2 class="text-2xl font-semibold mb-4">Récapitulatif de votre panier</h2>
                    @if(empty($cart))
                        <p>Votre panier est vide.</p>
                    @else
                        <table class="min-w-full bg-white rounded-lg shadow-lg">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 text-left">Formation</th>
                                    <th class="py-2 px-4 text-right">Prix</th>
                                    <th class="py-2 px-4 text-right">Quantité</th>
                                    <th class="py-2 px-4 text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0; @endphp
                                @foreach($cart as $item)
                                    @php $itemTotal = $item['price'] * $item['quantity']; @endphp
                                    <tr>
                                        <td class="py-2 px-4">{{ $item['name'] }}</td>
                                        <td class="py-2 px-4 text-right">{{ number_format($item['price'], 2) }}€</td>
                                        <td class="py-2 px-4 text-right">{{ $item['quantity'] }}</td>
                                        <td class="py-2 px-4 text-right">{{ number_format($itemTotal, 2) }}€</td>
                                    </tr>
                                    @php $total += $itemTotal; @endphp
                                @endforeach
                                <tr>
                                    <td colspan="3" class="py-2 px-4 text-right font-bold">Total</td>
                                    <td class="py-2 px-4 text-right font-bold">{{ number_format($total, 2) }}€</td>
                                </tr>
                            </tbody>
                        </table>
                    @endif
                </div>

                <div class="w-1/2 pl-6">
                    <h2 class="text-2xl font-semibold mb-4">Renseignement de votre moyen de paiement</h2>
                    <form action="{{ route('paiement.submit') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="titulaire" class="block text-sm font-medium text-gray-700">Titulaire</label>
                            <input type="text" id="titulaire" name="titulaire" required class="mt-1 block w-full p-2 border rounded">
                        </div>
                        <div class="mb-4">
                            <label for="nameBank" class="block text-sm font-medium text-gray-700">Nom</label>
                            <input type="text" id="nameBank" name="nameBank" required class="mt-1 block w-full p-2 border rounded">
                        </div>
                        <div class="mb-4">
                            <label for="addressBank" class="block text-sm font-medium text-gray-700">Adresse</label>
                            <input type="text" id="addressBank" name="addressBank" required class="mt-1 block w-full p-2 border rounded">
                        </div>
                        <div class="mb-4">
                            <label for="bic" class="block text-sm font-medium text-gray-700">BIC</label>
                            <input type="text" id="bic" name="bic" required class="mt-1 block w-full p-2 border rounded">
                        </div>
                        <div class="mb-4">
                            <label for="iban" class="block text-sm font-medium text-gray-700">IBAN</label>
                            <input type="text" id="iban" name="iban" required class="mt-1 block w-full p-2 border rounded">
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Valider votre paiement
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    @include('_footer')
</body>