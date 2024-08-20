<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ScorpWPCrea</title>

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
                                    ScorpWPCrea vous aide à booster votre visibilité en ligne avec des sites WordPress performants et personnalisés. 
                                    Que ce soit pour <a href="{{ url('/services/conception') }}"><span style="color: #88349c"><strong>un nouveau site web</strong></span></a>&nbsp;
                                    ou <a href="{{ url('/services/developpement') }}"><strong><span style="color: #88349c">la refonte d'un site web existant</span></strong></a>, 
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
                                <a class="aux-modern-button aux-black aux-modern-button-md aux-modern-button-normal aux-modern-button-default aux-icon-right" href="{{ url('/devis') }}">
                                    <div class="aux-overlay"></div>
                                    <div class="aux-icon">
                                        <div class="aux-text">
                                            <span class="aux-text-before">Mon devis gratuit</span>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style="width:15px;"><path d="M64 464c-8.8 0-16-7.2-16-16L48 64c0-8.8 7.2-16 16-16l160 0 0 80c0 17.7 14.3 32 32 32l80 0 0 288c0 8.8-7.2 16-16 16L64 464zM64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-293.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0L64 0zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24l144 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-144 0zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24l144 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-144 0z"/></svg>
                                    </div>
                                </a>
                                <a class="aux-modern-button aux-black aux-modern-button-md aux-modern-button-normal aux-modern-button-default aux-icon-right" href="{{ url('/services') }}">
                                    <div class="aux-overlay"></div>
                                    <div class="aux-icon">
                                        <div class="aux-text">
                                            <span class="aux-text-before">Mes Services</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </section>
                    </div>
                </div>

                @include('_services')  

                @include('_expertise')    

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <section class="modern-heading">
                            <div class="inner">
                                <h2 class="heading-secondary-project">
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
                                    <li class="list-card"><div class="card"><a href="{{ route('projects.show', 'tma-ifs') }}"><span class="model-name">TMA IFS</span><span>Réalisation de maintenance applicative du site (Coeur WordPress, Thèmes, Plugins, Contributions)</span></a></div></li>
                                    <li class="list-card"><div class="card"><a href="{{ route('projects.show', 'calf-mvp') }}"><span class="model-name">CALF MVP</span><span>Réalisation de simulateur pour simulation sa consommation d'énergie (Particulier / Professionnel)</span></a></div></li>
                                    <li class="list-card"><div class="card"><a href="{{ route('projects.show', 'edf-enr') }}"><span class="model-name">EDF-ENR</span><span>Réalisation de Bloc React Gutenberg pour l'ensemble du site (Refonte Complète)</span></a></div></li>
                                    <li class="list-card"><div class="card"><a href="{{ route('projects.show', 'engie') }}"><span class="model-name">ENGIE</span><span>Réalisation de Bloc React Gutenberg et Gestion d'une map pour borne de recharge voiture électrique</span></a></div></li>
                                    <li class="list-card"><div class="card"><a href="{{ route('projects.show', 'thekdo') }}"><span class="model-name">THEKDO</span><span>Gestion de la partie Woocommerce et préparation d'extract de commande avec requête SQL</span></a></div></li>
                                    <li class="list-card"><div class="card"><a href="{{ route('projects.show', 'theme-wordpress') }}"><span class="model-name">THEME WORDPRESS</span><span>Création de thème WordPress</span></a></div></li>
                                    <li class="list-card"><div class="card"><a href="{{ route('projects.show', 'plugins-wordpress') }}"><span class="model-name">PLUGINS WORDPRESS</span><span>Création de plugins WordPress</span></a></div></li>
                                    <li class="list-card"><div class="card"><a href="{{ route('projects.show', 'blocs-wordpress') }}"><span class="model-name">BLOCS WORDPRESS</span><span>Réalisation de Bloc React Gutenberg / ACF Gutenberg</span></a></div></li>
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
                                <h2 class="heading-secondary-article">
                                    <span class="head-before">Mes récents </span><span class="head-highlight">articles</span>
                                </h2></div>
                        </section>
                    </div>
                </div>

                @include('_articles')
            </div>
        </div>
    </body>

    @include('_footer')
    
</html>
