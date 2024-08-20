@vite('resources/css/projects.css')
@vite('resources/css/app.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <section>
                    <h5 class="heading-primary-portfolio">Articles</h5>
                    <h1 class="heading-secondary"><span class="heading-before">Les articles </span><span class="heading-highlight">que j'ai réalisé </span></h1>
                    <div class="heading-description">
                        <p>
                            Bienvenue sur la page dédiée aux articles ! Ici, vous trouverez un aperçu de tous les projets récents et en cours que j'ai pu réaliser. 
                            Que vous soyez un client potentiel, un partenaire ou simplement curieux de connaître mon travail, cette liste vous donnera un aperçu des 
                            diverses initiatives que j'ai pu entreprendre.
                        </p>
                    </div>
                    
                    <div class="filter-buttons">
                        <a href="{{ route('articles.index', ['category' => 'all']) }}" class="btn {{ $category === 'all' ? 'active' : '' }}">All</a>
                        <a href="{{ route('articles.index', ['category' => 'seo']) }}" class="btn {{ $category === 'seo' ? 'active' : '' }}">SEO</a>
                        <a href="{{ route('articles.index', ['category' => 'customization']) }}" class="btn {{ $category === 'customization' ? 'active' : '' }}">Customisation</a>
                        <a href="{{ route('articles.index', ['category' => 'plugins']) }}" class="btn {{ $category === 'plugins' ? 'active' : '' }}">Plugins</a>
                        <a href="{{ route('articles.index', ['category' => 'security']) }}" class="btn {{ $category === 'security' ? 'active' : '' }}">Sécurité</a>
                        <a href="{{ route('articles.index', ['category' => 'backup']) }}" class="btn {{ $category === 'backup' ? 'active' : '' }}">Backup</a>
                        <a href="{{ route('articles.index', ['category' => 'performance']) }}" class="btn {{ $category === 'performance' ? 'active' : '' }}">Performance</a>
                        <a href="{{ route('articles.index', ['category' => 'ecommerce']) }}" class="btn {{ $category === 'ecommerce' ? 'active' : '' }}">E-commerce</a>
                    </div>

                    <div class="projects-grid">
                        @foreach ($articles as $slug => $article)
                            <div class="project-card">
                                <a href="{{ route('articles.show', $slug) }}" class="project-link">
                                    <h2>{{ $article['title'] }}</h2>
                                    <p>{{ $article['excerpt'] }}</p>
                                </a>
                            </div>
                        @endforeach
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

