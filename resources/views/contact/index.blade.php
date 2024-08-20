@vite('resources/css/app.css')
@vite('resources/css/projects.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <section>
                    <h5 class="heading-primary-portfolio">Contact</h5>
                    <h1 class="heading-secondary"><span class="heading-before">Besoin </span><span class="heading-highlight">de me contacter </span></h1>
                    <div class="heading-description">
                        <p>Bienvenue sur la page de contact ! </p>
                    </div>
                    
                    <div class="contact-form mt-8">
                        @if(session('success'))
                            <div class="bg-green-500 text-white p-4 rounded-md mb-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                                <input type="text" id="name" name="name" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea id="message" name="message" rows="4" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Envoyer</button>
                            </div>
                        </form>
                    </div>

                </section>
            </div>
        </div>
    </div>
</body>

@include('_footer')
