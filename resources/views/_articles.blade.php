<div class="mt-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        <a href="{{ route('articles.show', 'introduction') }}" class="scale-100 p-6 bg-violet-100 dark:bg-violet-800/50 dark:bg-gradient-to-bl from-violet-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-violet-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Introduction à WordPress</h2>
                <p class="mt-4 text-white text-sm leading-relaxed">
                    Découvrez les bases de WordPress, comment l'installer et les premières étapes pour créer votre site web.
                </p>
            </div>
        </a>

        <a href="{{ route('articles.show', 'personnalisation') }}" class="scale-100 p-6 bg-violet-100 dark:bg-violet-800/50 dark:bg-gradient-to-bl from-violet-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-violet-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Personnalisation de thèmes WordPress</h2>
                <p class="mt-4 text-white text-sm leading-relaxed">
                    Apprenez comment personnaliser les thèmes WordPress pour donner à votre site une apparence unique.
                </p>
            </div>
        </a>

        <a href="{{ route('articles.show', 'seo') }}" class="scale-100 p-6 bg-violet-100 dark:bg-violet-800/50 dark:bg-gradient-to-bl from-violet-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-violet-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">SEO pour WordPress</h2>
                <p class="mt-4 text-white text-sm leading-relaxed">
                    Optimisez le référencement de votre site WordPress pour améliorer sa visibilité sur les moteurs de recherche.
                </p>
            </div>
        </a>

        <a href="{{ route('articles.show', 'plugins') }}" class="scale-100 p-6 bg-violet-100 dark:bg-violet-800/50 dark:bg-gradient-to-bl from-violet-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-violet-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Plugins essentiels pour WordPress</h2>
                <p class="mt-4 text-white text-sm leading-relaxed">
                    Découvrez les plugins incontournables pour améliorer les fonctionnalités de votre site WordPress.
                </p>
            </div>
        </a>
    </div>

    <div class="mt-8 flex justify-center">
        <a href="{{ route('articles.index') }}" class="inline-block px-6 py-3 bg-violet-600 text-white font-semibold text-sm leading-tight uppercase rounded shadow-md hover:bg-violet-700 hover:shadow-lg focus:bg-violet-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-violet-800 active:shadow-lg transition duration-150 ease-in-out">
            Voir plus d'articles
        </a>
    </div>
</div>
