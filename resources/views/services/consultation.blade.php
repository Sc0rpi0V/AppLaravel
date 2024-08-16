@vite('resources/css/app.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-12">Consultation du Site Web</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Statistiques de Visite</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Voici les principales statistiques de visite pour votre site :
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Nombre total de visites :</strong> 12,345</li>
                                <li><strong>Nombre de visiteurs uniques :</strong> 8,765</li>
                                <li><strong>Pages les plus consultées :</strong> Page d'accueil, Blog, Contact</li>
                                <li><strong>Durée moyenne des sessions :</strong> 3 minutes 45 secondes</li>
                                <li><strong>Taux de rebond :</strong> 42%</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Plugins Actifs</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Les plugins suivants sont actuellement actifs sur votre site WordPress :
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Yoast SEO</strong> - Pour l'optimisation du référencement</li>
                                <li><strong>Contact Form 7</strong> - Pour la gestion des formulaires de contact</li>
                                <li><strong>WP Super Cache</strong> - Pour l'amélioration des performances</li>
                                <li><strong>Akismet Anti-Spam</strong> - Pour la protection contre le spam</li>
                                <li><strong>Advanced Customs Fields</strong> - Pour la gestion de votre site</li>
                                <li><strong>WP Rollback</strong> - Pour la sauvegarde de votre site</li>
                                <li><strong>WooCommerce</strong> - Pour la gestion de votre boutique en ligne</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Thème Utilisé</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Votre site utilise actuellement le thème suivant :
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Nom du Thème :</strong> Astra</li>
                                <li><strong>Version :</strong> 3.9.1</li>
                                <li><strong>Développeur :</strong> Brainstorm Force</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Sécurité et Mises à Jour</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Voici les informations concernant la sécurité et les mises à jour de votre site :
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>WordPress Version :</strong> 6.3.1</li>
                                <li><strong>Dernière mise à jour effectuée :</strong> Il y a 2 jours</li>
                                <li><strong>Plugins à mettre à jour :</strong> Aucun, tous les plugins sont à jour.</li>
                                <li><strong>Rapport de sécurité :</strong> Aucun problème détecté.</li>
                                <li><strong>Listing des potentiels améliorations :</strong> Aucun problème détecté.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Performances du Site</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Voici un aperçu des performances de votre site Web :
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Temps de chargement moyen :</strong> 1.2 secondes</li>
                                <li><strong>Poids de la page d'accueil :</strong> 1.4 MB</li>
                                <li><strong>Nombre de requêtes HTTP :</strong> 56</li>
                                <li><strong>Optimisation des images :</strong> Toutes les images sont optimisées.</li>
                                <li><strong>Gestion des articles et pages :</strong></li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Autres Informations</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Voici d'autres informations utiles concernant votre site :
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Hébergement :</strong> Hébergé chez Bluehost</li>
                                <li><strong>Certificat SSL :</strong> Valide, expire dans 90 jours</li>
                                <li><strong>Backup :</strong> Sauvegarde quotidienne activée</li>
                                <li><strong>Commentaires :</strong> Modération manuelle activée</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        
    </div>

    @include('_footer')
    @include('_sponsor')
</body>