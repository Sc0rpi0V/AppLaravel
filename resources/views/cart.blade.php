@vite('resources/css/app.css')
@include('_head')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        
        @include('_nav')
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-12">Votre Panier</h1>

            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if(empty($cart))
                <p class="text-lg text-center">Votre panier est vide.</p>
            @else
                <table class="min-w-full bg-white rounded-lg shadow-lg">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 text-left">Formation</th>
                            <th class="py-2 px-4 text-right">Prix</th>
                            <th class="py-2 px-4 text-right">Quantité</th>
                            <th class="py-2 px-4 text-right">Total</th>
                            <th class="py-2 px-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach($cart as $key => $item)
                            @php $itemTotal = $item['price'] * $item['quantity']; @endphp
                            <tr>
                                <td class="py-2 px-4">{{ $item['name'] }}</td>
                                <td class="py-2 px-4 text-right">{{ number_format($item['price'], 2) }}€</td>
                                <td class="py-2 px-4 text-right">{{ $item['quantity'] }}</td>
                                <td class="py-2 px-4 text-right">{{ number_format($itemTotal, 2) }}€</td>
                                <td class="py-2 px-4 text-right">
                                    <form action="{{ route('cart.updateQuantity') }}" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="formation" value="{{ $key }}">
                                        <input type="number" name="quantity" value="1" min="1" max="{{ $item['quantity'] }}" class="w-16 p-1 border rounded">
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">
                                            Retirer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @php $total += $itemTotal; @endphp
                        @endforeach
                        <tr>
                            <td colspan="3" class="py-2 px-4 text-right font-bold">Total</td>
                            <td class="py-2 px-4 text-right font-bold">{{ number_format($total, 2) }}€</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-8 text-center">
                    <a href="{{ route('checkout') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Valider ma commande
                    </a>
                </div>
            @endif
        </div>
    </div>
    
    @include('_footer')
</body>
