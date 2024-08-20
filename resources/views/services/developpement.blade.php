@vite('resources/css/app.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-12">Développement de Site Web sur WordPress</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Choix du Thème</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Le choix d'un thème est crucial pour l'apparence et la fonctionnalité de votre site.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Thèmes populaires :</strong> Astra, Divi, OceanWP</li>
                                <li><strong>Thèmes personnalisables :</strong> GeneratePress, Neve</li>
                                <li><strong>Thème sur mesure :</strong> Créez un thème unique adapté à votre marque.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Plugins Essentiels</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Les plugins ajoutent des fonctionnalités indispensables à votre site WordPress.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>SEO :</strong> Yoast SEO, Rank Math</li>
                                <li><strong>Performance :</strong> WP Rocket, W3 Total Cache</li>
                                <li><strong>Sécurité :</strong> Wordfence, Sucuri Security</li>
                                <li><strong>Backup :</strong> UpdraftPlus, BackupBuddy</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Personnalisation avec le Customizer</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Utilisez le Customizer de WordPress pour personnaliser les couleurs, les polices, et la mise en page de votre site en temps réel.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Options de couleur :</strong> Modifiez les couleurs principales de votre site.</li>
                                <li><strong>Polices :</strong> Sélectionnez et prévisualisez des polices Google.</li>
                                <li><strong>Mises en page :</strong> Ajustez la structure de vos pages et articles.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Création de Pages avec Gutenberg</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Gutenberg est l'éditeur de blocs de WordPress, permettant une création de contenu flexible et moderne.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Blocs standard :</strong> Texte, Image, Vidéo, Galerie</li>
                                <li><strong>Blocs avancés :</strong> Colonnes, Tableaux, Boutons</li>
                                <li><strong>Blocs réutilisables :</strong> Créez des blocs personnalisés pour une utilisation répétée.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Sécurité et Maintenance</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Assurez-vous que votre site est sécurisé et bien entretenu pour éviter les problèmes futurs.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Mises à jour régulières :</strong> Mettez à jour WordPress, vos thèmes et plugins régulièrement.</li>
                                <li><strong>Sauvegardes automatiques :</strong> Planifiez des sauvegardes pour protéger vos données.</li>
                                <li><strong>Scanner de sécurité :</strong> Utilisez des outils pour détecter les vulnérabilités.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">SEO et Référencement</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Le SEO est essentiel pour améliorer la visibilité de votre site sur les moteurs de recherche.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Optimisation des mots-clés :</strong> Intégrez des mots-clés pertinents dans vos pages.</li>
                                <li><strong>SEO on-page :</strong> Optimisez les titres, méta-descriptions, et URL.</li>
                                <li><strong>Analyse des performances :</strong> Utilisez Google Analytics et Search Console pour suivre vos progrès.</li>
                            </ul>
                        </div>
                    </section>

                </div>
            </div>
        </div>
        
    </div>

    @include('_footer')
    
</body>