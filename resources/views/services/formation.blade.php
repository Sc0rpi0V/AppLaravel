@vite('resources/css/app.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-12">Formations sur WordPress</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Formation de Base sur WordPress</h2>
                        <p class="text-lg text-green-600 mt-2"><strong>Prix :</strong> 199€</p>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Apprenez les bases de WordPress, de l'installation à la gestion de contenu, pour créer et maintenir votre propre site.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Installation :</strong> Installation de WordPress sur un serveur ou en local.</li>
                                <li><strong>Gestion du contenu :</strong> Création et gestion d'articles, pages, catégories, et balises.</li>
                                <li><strong>Personnalisation de base :</strong> Choix et installation de thèmes, gestion des menus.</li>
                            </ul>
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="formation" value="Formation de Base sur WordPress">
                                <input type="hidden" name="price" value="199">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                                    Ajouter au panier
                                </button>
                            </form>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Formation Avancée sur WordPress</h2>
                        <p class="text-lg text-green-600 mt-2"><strong>Prix :</strong> 299€</p>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Approfondissez vos connaissances avec des techniques avancées pour personnaliser et optimiser votre site WordPress.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Thèmes enfants :</strong> Créez et personnalisez des thèmes enfants pour un contrôle total.</li>
                                <li><strong>Plugins personnalisés :</strong> Développez des plugins pour ajouter des fonctionnalités spécifiques.</li>
                                <li><strong>Optimisation SEO :</strong> Techniques avancées pour améliorer le référencement de votre site.</li>
                            </ul>
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="formation" value="Formation Avancée sur WordPress">
                                <input type="hidden" name="price" value="299">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                                    Ajouter au panier
                                </button>
                            </form>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Formation sur Gutenberg</h2>
                        <p class="text-lg text-green-600 mt-2"><strong>Prix :</strong> 149€</p>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Maîtrisez l'éditeur de blocs Gutenberg pour créer des pages modernes et dynamiques sur WordPress.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Utilisation des blocs :</strong> Apprenez à utiliser les blocs standard pour structurer vos pages.</li>
                                <li><strong>Blocs réutilisables :</strong> Créez des blocs personnalisés que vous pouvez réutiliser sur différentes pages.</li>
                                <li><strong>Extensions de Gutenberg :</strong> Explorez les plugins qui étendent les capacités de Gutenberg.</li>
                            </ul>
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="formation" value="Formation sur Gutenberg">
                                <input type="hidden" name="price" value="149">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                                    Ajouter au panier
                                </button>
                            </form>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Formation sur WooCommerce</h2>
                        <p class="text-lg text-green-600 mt-2"><strong>Prix :</strong> 249€</p>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Découvrez comment transformer votre site WordPress en boutique en ligne avec WooCommerce.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Installation de WooCommerce :</strong> Configuration de base et gestion des produits.</li>
                                <li><strong>Gestion des paiements :</strong> Paramétrage des passerelles de paiement et des options de livraison.</li>
                                <li><strong>Personnalisation de la boutique :</strong> Utilisation des thèmes et plugins pour un e-commerce sur mesure.</li>
                            </ul>
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="formation" value="Formation sur WooCommerce">
                                <input type="hidden" name="price" value="249">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                                    Ajouter au panier
                                </button>
                            </form>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Formation sur la Sécurité WordPress</h2>
                        <p class="text-lg text-green-600 mt-2"><strong>Prix :</strong> 179€</p>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Apprenez à protéger votre site WordPress contre les menaces avec des pratiques de sécurité essentielles.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Configuration de sécurité :</strong> Mise en place des bonnes pratiques pour sécuriser votre site.</li>
                                <li><strong>Sauvegardes régulières :</strong> Planification et automatisation des sauvegardes.</li>
                                <li><strong>Réagir aux incidents :</strong> Comment répondre efficacement aux attaques et autres incidents de sécurité.</li>
                            </ul>
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="formation" value="Formation sur la Sécurité WordPress">
                                <input type="hidden" name="price" value="179">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                                    Ajouter au panier
                                </button>
                            </form>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Formation sur la Performance WordPress</h2>
                        <p class="text-lg text-green-600 mt-2"><strong>Prix :</strong> 219€</p>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Optimisez les performances de votre site WordPress pour une meilleure expérience utilisateur et un meilleur référencement.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Optimisation du cache :</strong> Implémentation de solutions de cache pour accélérer le site.</li>
                                <li><strong>Compression des fichiers :</strong> Réduction de la taille des images et des scripts pour une meilleure vitesse.</li>
                                <li><strong>Surveillance de la performance :</strong> Outils et techniques pour surveiller et améliorer les performances.</li>
                            </ul>
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="formation" value="Formation sur la Performance WordPress">
                                <input type="hidden" name="price" value="219">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                                    Ajouter au panier
                                </button>
                            </form>
                        </div>
                    </section>

                </div>
            </div>
        </div>
        
    </div>

    @include('_footer')
    
</body>
