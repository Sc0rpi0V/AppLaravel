@vite('resources/css/app.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-12">Conception de Site Web sur WordPress</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Planification et Stratégie</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Développez une stratégie solide pour la conception de votre site WordPress, alignée sur vos objectifs d'affaires.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Analyse des besoins :</strong> Identification des objectifs et des besoins de votre site.</li>
                                <li><strong>Recherche de mots-clés :</strong> Choix des mots-clés pour cibler votre audience.</li>
                                <li><strong>Structure du site :</strong> Planification de la navigation et de la hiérarchie des pages.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Design et Thèmes Personnalisés</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Créez un design unique pour votre site WordPress qui reflète votre marque et engage vos visiteurs.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Choix du thème :</strong> Sélection et personnalisation d'un thème adapté à votre marque.</li>
                                <li><strong>Design responsive :</strong> Conception pour une expérience optimale sur tous les appareils.</li>
                                <li><strong>Personnalisation avancée :</strong> Création de thèmes enfants et design sur mesure.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Développement de Fonctionnalités</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Ajoutez des fonctionnalités spécifiques à votre site pour améliorer l'expérience utilisateur et atteindre vos objectifs.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Plugins sur mesure :</strong> Développement de plugins pour des fonctionnalités spécifiques.</li>
                                <li><strong>Intégration d'API :</strong> Connexion de votre site à des services externes via des API.</li>
                                <li><strong>Formulaires interactifs :</strong> Création de formulaires complexes pour capturer des données ou interagir avec les utilisateurs.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Optimisation SEO</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Assurez une visibilité maximale de votre site sur les moteurs de recherche grâce à des techniques de SEO efficaces.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Structure de l'URL :</strong> Mise en place de permaliens optimisés pour le SEO.</li>
                                <li><strong>Balises méta :</strong> Création de balises méta pertinentes pour chaque page.</li>
                                <li><strong>Optimisation des images :</strong> Compression et balisage des images pour un meilleur référencement.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Tests et Déploiement</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Effectuez des tests rigoureux et préparez votre site pour le déploiement en ligne, en toute sécurité.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Tests de compatibilité :</strong> Vérification du fonctionnement sur différents navigateurs et appareils.</li>
                                <li><strong>Tests de performance :</strong> Analyse de la vitesse et optimisation des temps de chargement.</li>
                                <li><strong>Mise en ligne :</strong> Déploiement du site en production avec suivi post-déploiement.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Maintenance et Évolution</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Assurez la pérennité de votre site WordPress avec un service de maintenance continue et des mises à jour régulières.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Mises à jour régulières :</strong> Application des mises à jour de sécurité et de fonctionnalité.</li>
                                <li><strong>Optimisation continue :</strong> Ajustements pour améliorer la performance et l'expérience utilisateur.</li>
                                <li><strong>Ajout de nouvelles fonctionnalités :</strong> Développement continu pour répondre aux besoins changeants de votre entreprise.</li>
                            </ul>
                        </div>
                    </section>

                </div>
            </div>
        </div>
        
    </div>

    @include('_footer')
    
</body>