@vite('resources/css/app.css')
@vite('resources/css/projects.css')
@include('_head')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        
        @include('_nav')
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-12">Merci pour votre commande !</h1>
            <p class="text-lg text-center">Votre commande a été passée avec succès. Vous recevrez un email de confirmation sous peu.</p>
            <div style="display: flex; justify-content: center;">
                <a href="{{ route('home') }}" class="return-button">
                    Retour à la page d'accueil
                </a>
            </div>
        </div>
    </div>
    
    @include('_footer')
</body>
