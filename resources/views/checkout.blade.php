@vite('resources/css/app.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        
        @include('_nav')
        <div class="max-w-7xl mx-auto p-6 lg:p-8" style="margin-top: 90px;">
            <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-12">Renseignements pour la commande</h1>

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
                    <h2 class="text-2xl font-semibold mb-4">Informations de la commande</h2>
                    <form action="{{ route('checkout.submit') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nom complet</label>
                            <input type="text" id="name" name="name" required class="mt-1 block w-full p-2 border rounded">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" required class="mt-1 block w-full p-2 border rounded">
                        </div>
                        <div class="mb-4">
                            <label for="address" class="block text-sm font-medium text-gray-700">Adresse</label>
                            <input type="text" id="address" name="address" required class="mt-1 block w-full p-2 border rounded">
                        </div>
                        <div class="mb-4">
                            <label for="city" class="block text-sm font-medium text-gray-700">Ville</label>
                            <input type="text" id="city" name="city" required class="mt-1 block w-full p-2 border rounded">
                        </div>
                        <div class="mb-4">
                            <label for="postal_code" class="block text-sm font-medium text-gray-700">Code postal</label>
                            <input type="text" id="postal_code" name="postal_code" required class="mt-1 block w-full p-2 border rounded">
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                            <input type="text" id="phone" name="phone" required class="mt-1 block w-full p-2 border rounded">
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Valider la commande
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    @include('_footer')
</body>