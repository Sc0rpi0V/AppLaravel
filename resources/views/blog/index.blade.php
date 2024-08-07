@vite('resources/css/projects.css')
@vite('resources/css/app.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <section>
                    <h5 class="heading-primary-portfolio">Articles</h5>
                    <h1 class="heading-secondary"><span class="heading-before">Des articles </span><span class="heading-highlight">à votre disposition </span></h1>
                    <div class="heading-description">
                        <p>
                            Bienvenue sur la page dédiée aux blogs ! 
                        </p>
                    </div>

                    <p>
                        Pour toute question ou demande de renseignements supplémentaires, n'hésitez pas à nous contacter. Nous serons ravis de discuter de nos projets 
                        en détail et de vous aider à trouver des solutions adaptées à vos besoins.
                    </p>
                </section>
            </div>
        </div>
    </div>
</body>

@include('_footer')
@include('_sponsor')
