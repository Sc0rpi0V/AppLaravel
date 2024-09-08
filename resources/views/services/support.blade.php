@vite('resources/css/app.css')
@include('_head')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-12">Support sur WordPress</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Assistance Technique</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Obtenez de l'aide pour résoudre les problèmes techniques liés à votre site WordPress.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Dépannage des erreurs :</strong> Résolution des erreurs PHP, problèmes de base de données, etc.</li>
                                <li><strong>Compatibilité des plugins :</strong> Aide à identifier et corriger les conflits entre plugins.</li>
                                <li><strong>Problèmes de thème :</strong> Assistance pour les problèmes d'affichage ou de personnalisation.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Sécurité du Site</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Protégez votre site contre les menaces de sécurité avec notre assistance dédiée.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Analyse de sécurité :</strong> Identification des vulnérabilités sur votre site.</li>
                                <li><strong>Suppression de malware :</strong> Nettoyage des logiciels malveillants et restauration de votre site.</li>
                                <li><strong>Renforcement de la sécurité :</strong> Configuration de pare-feu, protection contre les attaques par force brute, etc.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Sauvegarde et Restauration</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Assurez-vous que vos données sont sécurisées grâce à des solutions de sauvegarde fiables.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Sauvegardes automatiques :</strong> Configuration et gestion des sauvegardes régulières.</li>
                                <li><strong>Restauration :</strong> Récupération des données à partir de sauvegardes en cas de problème.</li>
                                <li><strong>Migrations :</strong> Transfert de votre site vers un nouvel hébergement ou un nouveau domaine.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Mises à Jour et Maintenance</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Gardez votre site à jour et fonctionnel grâce à un service de maintenance régulier.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Mises à jour WordPress :</strong> Gestion des mises à jour du noyau, des thèmes et des plugins.</li>
                                <li><strong>Optimisation de la base de données :</strong> Nettoyage et optimisation régulière pour de meilleures performances.</li>
                                <li><strong>Surveillance :</strong> Suivi de la disponibilité et des performances du site.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Support Personnalisé</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Recevez une assistance personnalisée pour répondre à vos besoins spécifiques sur WordPress.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Formation :</strong> Sessions de formation sur l'utilisation de WordPress pour vous et votre équipe.</li>
                                <li><strong>Consultation :</strong> Conseils sur les meilleures pratiques pour optimiser votre site.</li>
                                <li><strong>Support prioritaire :</strong> Accès à un support prioritaire pour les urgences.</li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800">Migration et Déploiement</h2>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700">
                                Bénéficiez de notre expertise pour une migration ou un déploiement sans accroc de votre site WordPress.
                            </p>
                            <ul class="mt-2 text-gray-600">
                                <li><strong>Changement d'hébergement :</strong> Transfert de votre site vers un nouvel hébergeur.</li>
                                <li><strong>Déploiement en production :</strong> Assistance pour la mise en ligne de votre site.</li>
                                <li><strong>Tests post-déploiement :</strong> Vérification des fonctionnalités après déploiement.</li>
                            </ul>
                        </div>
                    </section>

                </div>
            </div>
        </div>
        
    </div>

    @include('_footer')
    
</body>