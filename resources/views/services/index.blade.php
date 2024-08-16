@vite('resources/css/app.css')
@vite('resources/css/services.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <section>
                    <h5 class="heading-primary-services">Mes Expertises</h5>
                    <h1 class="heading-secondary"><span class="heading-before">Découvrez </span><span class="heading-highlight">mes services </span></h1>
                    <div class="heading-description">
                        <p>
                            En tant que développeur web FullStack (Spécialisé Back-End) , je développe des solutions digitales adaptés à vos besoins mais reste également 
                            présent afin de vous accompagner au moeux dans votre transformation digitale.
                        </p>
                    </div>
                </section>
                
                <section class="services mt-10">
                    <div class="service-item">
                        <a href="{{ url('/services/conception') }}">
                            <h2 class="service-title">Conception de site web</h2>
                            <p class="service-description">
                                Je conçois des sites web sur mesure adaptés à vos besoins spécifiques. Du design à l'ergonomie, chaque détail est pensé pour offrir une expérience utilisateur optimale.
                            </p>
                        </a>
                    </div>
                    <div class="service-item">
                        <a href="{{ url('/services/developpement') }}">
                            <h2 class="service-title">Refonte de site web</h2>
                            <p class="service-description">
                                Votre site a besoin d'un coup de jeune ? Je réalise la refonte complète de votre site pour le rendre plus moderne, performant et adapté aux dernières tendances.
                            </p>
                        </a>
                    </div>
                    <div class="service-item">
                        <a href="{{ url('/services/support') }}">
                            <h2 class="service-title">Maintenance de site web</h2>
                            <p class="service-description">
                                Pour assurer le bon fonctionnement et la sécurité de votre site, je propose des services de maintenance régulière incluant les mises à jour, les sauvegardes et le support technique.
                            </p>
                        </a>
                    </div>
                    <div class="service-item">
                        <h2 class="service-title">Hébergement web</h2>
                        <p class="service-description">
                            Je vous offre des solutions d'hébergement fiables et sécurisées pour que votre site soit toujours accessible avec des temps de chargement optimaux.
                        </p>
                    </div>
                    <div class="service-item">
                        <a href="{{ url('/services/consultation') }}">
                            <h2 class="service-title">Référencement naturel SEO</h2>
                            <p class="service-description">
                                Pour améliorer la visibilité de votre site sur les moteurs de recherche, je mets en place des stratégies de référencement naturel (SEO) efficaces et durables.
                            </p>
                        </a>
                    </div>
                    <div class="service-item">
                        <a href="{{ url('/services/formation') }}">
                            <h2 class="service-title">Accompagnement</h2>
                            <p class="service-description">
                                Je vous accompagne dans la définition et la mise en œuvre de votre stratégie digitale, en vous fournissant des conseils personnalisés et en vous aidant à atteindre vos objectifs.
                            </p>
                        </a>
                    </div>
                </section>

                <section class="modern-heading-services">
                    <div class="inner">
                        <h2 class="heading-secondary-services">
                            <span class="head-before">Mon </span><span class="head-highlight">processus</span><span class="head-after"> de la conception de site web</span>
                        </h2>
                    </div>
                    <div class="markdown prose w-full break-words dark:prose-invert light">
                        <ol>
                            <li>
                                <span style="color: #88349c;"><strong>Consultation initiale :</strong></span> 
                                Nous discutons ensemble des besoins et des objectifs pour votre site web afin d’établir une vision précise et alignée avec votre marque.
                            </li>
                            <li>
                                <span style="color: #88349c;"><strong>Cahier de charges :</strong></span> 
                                Nous passons à l’élaboration d’un document complet détaillant le design, les fonctionnalités et les délais pour orienter le projet de manière claire.
                            </li>
                            <li>
                                <span style="color: #88349c;"><strong>Installation et configuration :</strong></span>
                                <p>Nous mettons en place l’environnement de développement (hébergement et nom de domaine compris) avec WordPress et les outils nécessaires pour lancer la construction du site.
                                </p>
                            </li>
                            <li>
                                <span style="color: #88349c;"><span style="color: #88349c;"><strong>Développement et design :</strong></span></span>
                                <p>Je conçois la structure et le design du site en respectant votre charte graphique et en optimisant l’expérience utilisateur.</p>
                            </li>
                            <li>
                                <span style="color: #88349c;"><strong>Révisions et ajustements :</strong></span>
                                <p>Nous procédons à des discussions et modifications itératives pour garantir votre satisfaction totale avant la livraison finale.</p>
                            </li>
                            <li>
                                <span style="color: #88349c;"><strong>Livraison et support : </strong></span>
                                Je finalise le site en vous offrant une formation de base et un support continu pour assurer son succès et répondre à vos besoins futurs.
                                <div class="mt-1 flex gap-3 empty:hidden juice:-ml-3"><div class="items-center justify-start rounded-xl p-1 flex">&nbsp;</div></div>
                            </li>
                        </ol>
                    </div>
                </section>

                @include('_expertise')

                <div class="widget-container">
                    <section class="modern-heading">
                        <div class="inner">
                            <h5 class="heading-primary-info">Vous voulez en savoir d'avantage</h5>
                            <h2 class="heading-secondary">
                                <span class="head-before">Vous avez un projet </span>
                                <span class="head-highlight">web</span>
                                <span class="head-after">?</span>
                            </h2>
                            <div class="heading-description">
                                <div class="impact__content cms --dark">Contactez-nous via notre formulaire de contact et je reviendrais vers vous en 
                                    <span style="color: #e1a1f1"><strong>le plus&nbsp;rapidement possible.</strong></span>
                                </div>
                            </div>
                        </div>
                    </section> 
                    <div class="button-wrapper button-align-center">
                        <a class="button black button-md button-normal button-default icon-" href="#">
                            <div class="text">
                                <span class="text-before">Demander un devis</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('_footer')
    @include('_sponsor')
</body>