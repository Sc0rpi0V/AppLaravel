@vite('resources/css/projects.css')
@vite('resources/css/app.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <section>
                    <h5 class="heading-primary-portfolio">Portfolio</h5>
                    <h1 class="heading-secondary"><span class="heading-before">Les projets dont </span><span class="heading-highlight">je suis fier </span></h1>
                    <div class="heading-description">
                        <p>Bienvenue sur la page dédiée aux projets ! Ici, vous trouverez un aperçu de tous les projets récents et en cours que j'ai pu réaliser. Que vous soyez un client potentiel, un partenaire ou simplement curieux de connaître mon travail, cette liste vous donnera un aperçu des diverses initiatives que j'ai pu entreprendre.</p>

                        <p>Je m'engage à fournir des solutions innovantes et de haute qualité dans chaque projet. En cliquant sur les titres des projets ci-dessous, vous pourrez accéder à des détails supplémentaires sur chaque projet, y compris les objectifs, les défis rencontrés, et les résultats obtenus.</p>

                        <p>N'hésitez pas à explorer chaque projet pour mieux comprendre mon expertise et la manière dont j'aborde les différents défis. Je suis fiers de mon travail et suis impatients de partager mes réussites avec vous.</p>
                    </div>
                    
                    <div class="filter-buttons">
                        <a href="{{ route('projects.index', ['category' => 'all']) }}" class="btn {{ $category === 'all' ? 'active' : '' }}">All</a>
                        <a href="{{ route('projects.index', ['category' => 'maintenance']) }}" class="btn {{ $category === 'maintenance' ? 'active' : '' }}">Maintenance</a>
                        <a href="{{ route('projects.index', ['category' => 'simulateur']) }}" class="btn {{ $category === 'simulateur' ? 'active' : '' }}">Simulateur</a>
                        <a href="{{ route('projects.index', ['category' => 'react']) }}" class="btn {{ $category === 'react' ? 'active' : '' }}">React</a>
                        <a href="{{ route('projects.index', ['category' => 'woocommerce']) }}" class="btn {{ $category === 'woocommerce' ? 'active' : '' }}">Woocommerce</a>
                        <a href="{{ route('projects.index', ['category' => 'wordpress']) }}" class="btn {{ $category === 'wordpress' ? 'active' : '' }}">WordPress</a>
                    </div>

                    <div class="projects-grid">
                        @foreach ($projects as $slug => $project)
                            <div class="project-card">
                                <a href="{{ route('projects.show', $slug) }}" class="project-link">
                                    <h2>{{ $project['title'] }}</h2>
                                    <p>{{ $project['description'] }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <p>Pour toute question ou demande de renseignements supplémentaires, n'hésitez pas à nous contacter. Nous serons ravis de discuter de nos projets en détail et de vous aider à trouver des solutions adaptées à vos besoins.</p>
                </section>
            </div>
        </div>
    </div>
</body>

@include('_footer')
@include('_sponsor')
