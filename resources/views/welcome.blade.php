<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebCrea</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
            @include('_nav')

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <section class="section-heading">
                            <div class="heading">
                                <h5 class="heading-primary">Création de site web WordPress</h5>
                                <h1 class="heading-secondary"><span class="heading-before">Attirez plus de clients avec </span><span class="heading-highlight">un site web </span><span class="aux-head-after">qui vous ressemble</span></h1>
                                <div class="heading-description">
                                    <p>
                                    WebCrea vous aide à booster votre visibilité en ligne avec des sites WordPress performants et personnalisés. 
                                    Que ce soit pour <a href="https://creawp.net/services/conception-de-site-web/"><span style="color: #88349c"><strong>un nouveau site web</strong></span></a>&nbsp;
                                    ou <a href="https://creawp.net/services/refonte-de-site-web/"><strong><span style="color: #88349c">la refonte d'un site web existant</span></strong></a>, 
                                    nous sommes là pour vous aider à attirer plus de clients !</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="mt-16">
                    <div class="button-container">
                        <section class="section-button">
                            <div class="button">
                                <a class="aux-modern-button aux-black aux-modern-button-md aux-modern-button-normal aux-modern-button-default aux-icon-right" href="https://creawp.net/contact/">
                                    <div class="aux-overlay"></div>
                                    <div class="aux-icon">
                                        <div class="aux-text">
                                            <span class="aux-text-before">Mon devis gratuit</span>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style="width:15px;"><path d="M64 464c-8.8 0-16-7.2-16-16L48 64c0-8.8 7.2-16 16-16l160 0 0 80c0 17.7 14.3 32 32 32l80 0 0 288c0 8.8-7.2 16-16 16L64 464zM64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-293.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0L64 0zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24l144 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-144 0zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24l144 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-144 0z"/></svg>
                                    </div>
                                </a>
                                <a class="aux-modern-button aux-black aux-modern-button-md aux-modern-button-normal aux-modern-button-default aux-icon-right" href="https://creawp.net/contact/">
                                    <div class="aux-overlay"></div>
                                    <div class="aux-icon">
                                        <div class="aux-text">
                                            <span class="aux-text-before">Nos Services</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="{{ url('/creation') }}" class="scale-100 p-6 bg-violet-100 dark:bg-violet-800/50 dark:bg-gradient-to-bl from-violet-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-violet-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-white-50 dark:bg-violet-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Création de site web</h2>

                                <p class="mt-4 text-white text-sm leading-relaxed">
                                    Réalisation de sites sur mesure et sites e-commerce sous WordPress, mais également de création de spécifique
                                    sur votre site WordPress.
                                </p>
                            </div>
                        </a>

                        <a href="{{ url('/blog') }}" class="scale-100 p-6 bg-violet-100 dark:bg-violet-800/50 dark:bg-gradient-to-bl from-violet-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-violet-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-violet-50 dark:bg-violet-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-white">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Refonte de site web</h2>

                                <p class="mt-4 text-white text-sm leading-relaxed">
                                    Renouveller votre site site avec différentes options pour de meilleurs performances et gagner en simplicité avec 
                                    un dashboard 100% customisable.
                                </p>
                            </div>

                        </a>

                        <a href="{{ url('/project') }}" class="scale-100 p-6 bg-violet-100 dark:bg-violet-800/50 dark:bg-gradient-to-bl from-violet-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-violet-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-violet-50 dark:bg-violet-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Référencement</h2>

                                <p class="mt-4 text-white text-sm leading-relaxed">
                                    Optimisation de la visibilité de votre site internet grâce à une stratégie de référencement naturel efficace.
                                </p>
                            </div>

                        </a>

                        <a href="{{ url('/tma') }}" class="scale-100 p-6 bg-violet-100 dark:bg-violet-800/50 dark:bg-gradient-to-bl from-violet-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-violet-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-violet-50 dark:bg-violet-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">TMA et Plugins</h2>

                                <p class="mt-4 text-white text-sm leading-relaxed">
                                    Réalisation de maintenance applicative sur votre thème, contenu et coeur de WordPress, ainsi que de la 
                                    réalisation de plugins sur mesure.
                                </p>
                            </div>
                        </a>  
                    </div>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <section class="modern-heading">
                            <div class="inner">
                                <h2 class="inner-heading-secondary">
                                    <span class="head-before">Mon expertise en </span><span class="head-highlight">développement web</span>
                                </h2></div>
                        </section>
                    </div>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 lg:gap-8">
                        <!-- Card 1 -->
                        <section class="list-card-wp bg-white shadow-md rounded-lg overflow-hidden">
                            <img class="w-full h-48 object-cover" src="{{ asset('img/logo-wp.png') }}" alt="WordPress">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold mb-2">WordPress</h3>
                                <p>Expert parlant de WordPress.</p>
                            </div>
                        </section>
                        <!-- Card 2 -->
                        <section class="list-card-wp bg-white shadow-md rounded-lg overflow-hidden">
                            <img class="w-full h-48 object-cover" src="{{ asset('img/logo-woo.png') }}" alt="WooCommerce">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold mb-2">WooCommerce</h3>
                                <p>Expert parlant de WooCommerce.</p>
                            </div>
                        </section>
                        <!-- Card 3 -->
                        <section class="list-card-wp bg-white shadow-md rounded-lg overflow-hidden">
                            <img class="w-full h-48 object-cover" src="{{ asset('img/logo-tma.webp') }}" alt="Maintenance Applicative">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold mb-2">Maintenance Applicative</h3>
                                <p>Expert parlant de Maintenance applicative.</p>
                            </div>
                        </section>
                        <!-- Card 4 -->
                        <section class="list-card-wp bg-white shadow-md rounded-lg overflow-hidden">
                            <img class="w-full h-48 object-cover" src="{{ asset('img/logo-plugins.png') }}" alt="Plugins WP">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold mb-2">Plugins WP</h3>
                                <p>Expert parlant de Plugins WP.</p>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <section class="modern-heading">
                            <div class="inner">
                                <h2 class="inner-heading-secondary">
                                    <span class="head-before">Mes différents </span><span class="head-highlight">Projets</span>
                                </h2></div>
                        </section>
                    </div>
                </div>

                <div class="mt-16">
                    <section>
                        <div class="void" id="void">
                            <div class="crop">
                                <ul id="card-list" style="--count: 8;">
                                    <li class="list-card"><div class="card"><a href=""><span class="model-name">TMA IFS</span><span>Réalisation de maintenance applicative du site (Coeur WordPress, Thèmes, Plugins, Contributions)</span></a></div></li>
                                    <li class="list-card"><div class="card"><a href=""><span class="model-name">CALF MVP</span><span>Réalisation de simulateur pour simulation sa consommation d'énergie (Particulier / Professionnel)</span></a></div></li>
                                    <li class="list-card"><div class="card"><a href=""><span class="model-name">EDF-ENR</span><span>Réalisation de Bloc React Gutenberg pour l'ensemble du site (Refonte Complète)</span></a></div></li>
                                    <li class="list-card"><div class="card"><a href=""><span class="model-name">ENGIE</span><span>Réalisation de Bloc React Gutenberg et Gestion d'une map pour borne de recharge voiture électrique</span></a></div></li>
                                    <li class="list-card"><div class="card"><a href=""><span class="model-name">THEKDO</span><span>Gestion de la partie Woocommerce et préparation d'extract de commande avec requête SQL</span></a></div></li>
                                    <li class="list-card"><div class="card"><a href=""><span class="model-name">THEME WORDPRESS</span><span>Création de thème WordPress</span></a></div></li>
                                    <li class="list-card"><div class="card"><a href=""><span class="model-name">PLUGINS WORDPRESS</span><span>Création de plugins WordPress</span></a></div></li>
                                    <li class="list-card"><div class="card"><a href=""><span class="model-name">BLOCS WORDPRESS</span><span>Réalisation de Bloc React Gutenberg / ACF Gutenberg</span></a></div></li>
                                </ul>
                                <div class="last-circle"></div>
                                <div class="second-circle"></div>
                            </div>
                            <div class="mask"></div>
                            <div class="center-circle"></div>
                        <div>
        </section>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <section class="modern-heading">
                            <div class="inner">
                                <h2 class="inner-heading-secondary">
                                    <span class="head-before">Mes récents </span><span class="head-highlight">articles</span>
                                </h2></div>
                        </section>
                    </div>
                </div>

            </div>
        </div>
    </body>

    @include('_footer')
    @include('_sponsor')
</html>
