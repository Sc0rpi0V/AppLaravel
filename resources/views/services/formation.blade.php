@vite('resources/css/app.css')
@include('_head')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-12">Formations sur WordPress</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    @foreach($formations as $slug => $formation)
                        <section class="bg-white p-6 rounded-lg shadow-lg" id="{{ $formation['id']}}">
                            <h2 class="text-2xl font-semibold text-gray-800">{{ $formation['title'] }}</h2>
                            <p class="text-lg text-green-600 mt-2"><strong>Prix :</strong> {{ $formation['price'] }}</p>
                            <div class="mt-4">
                                <p class="text-lg text-gray-700">
                                    {{ $formation['excerpt'] }}
                                </p>
                                <ul class="mt-2 text-gray-600">
                                    @foreach($formation['description'] as $description)
                                        <li>{{ $description }}</li>
                                    @endforeach
                                </ul>
                                <form action="{{ route('cart.add') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="formation_id" value="{{ $formation['id'] }}">
                                    <input type="hidden" name="formation" value="{{ $formation['title'] }}">
                                    <input type="hidden" name="price" value="{{ str_replace('€', '', $formation['price']) }}">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                                        Ajouter au panier
                                    </button>
                                </form>
                            </div>
                        </section>
                    @endforeach

                </div>
            </div>
        </div>
        
    </div>

    @include('_footer')
    
</body>
