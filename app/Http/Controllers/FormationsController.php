<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationsController extends Controller
{
    protected $formations = [
        'bases-wordpress' => [
            'title' => 'Formation de Base sur WordPress',
            'price' => '199€',
            'excerpt' => 'Apprenez les bases de WordPress, de l\'installation à la gestion de contenu, pour créer et maintenir votre propre site.',
            'description' => [
                'Installation de WordPress sur un serveur ou en local.',
                'Création et gestion d\'articles, pages, catégories, et balises.',
                'Choix et installation de thèmes, gestion des menus.'
            ],
            'category' => 'install',
        ],
        'advanced-wordpress' => [
            'title' => 'Formation Avancée sur WordPress',
            'price' => '299€',
            'excerpt' => 'Approfondissez vos connaissances avec des techniques avancées pour personnaliser et optimiser votre site WordPress.',
            'description' => [
                'Créez et personnalisez des thèmes enfants pour un contrôle total.',
                'Développez des plugins pour ajouter des fonctionnalités spécifiques.',
                'Techniques avancées pour améliorer le référencement de votre site.',
            ],
            'category' => 'install',
        ],
        'gutenberg-wordpress' => [
            'title' => 'Formation sur Gutenberg',
            'price' => '149€',
            'excerpt' => 'Maîtrisez l\'éditeur de blocs Gutenberg pour créer des pages modernes et dynamiques sur WordPress.',
            'description' => [
                'Apprenez à utiliser les blocs standard pour structurer vos pages.',
                'Créez des blocs personnalisés que vous pouvez réutiliser sur différentes pages.',
                'Explorez les plugins qui étendent les capacités de Gutenberg.',
            ],
            'category' => 'gutenberg',
        ],
        'woocommerce-wordpress' => [
            'title' => 'Formation sur WooCommerce',
            'price' => '249€',
            'excerpt' => 'Découvrez comment transformer votre site WordPress en boutique en ligne avec WooCommerce.',
            'description' => [
                'Configuration de base et gestion des produits.',
                'Paramétrage des passerelles de paiement et des options de livraison.',
                'Utilisation des thèmes et plugins pour un e-commerce sur mesure.',
            ],
            'category' => 'woocommerce',
        ],
        'security-wordpress' => [
            'title' => 'Formation sur la Sécurité WordPress',
            'price' => '179€',
            'excerpt' => 'Apprenez à protéger votre site WordPress contre les menaces avec des pratiques de sécurité essentielles.            ',
            'description' => [
                'Mise en place des bonnes pratiques pour sécuriser votre site.',
                'Planification et automatisation des sauvegardes.',
                'Comment répondre efficacement aux attaques et autres incidents de sécurité.',
            ],
            'category' => 'security',
        ],
        'analytics-wordpress' => [
            'title' => 'Formation sur la Performance WordPress',
            'price' => '219€',
            'excerpt' => 'Optimisez les performances de votre site WordPress pour une meilleure expérience utilisateur et un meilleur référencement.',
            'description' => [
                'Implémentation de solutions de cache pour accélérer le site.',
                'Réduction de la taille des images et des scripts pour une meilleure vitesse.',
                'Outils et techniques pour surveiller et améliorer les performances.',
            ],
            'category' => 'analytics',
        ],
        'seo-wordpress' => [
            'title' => 'Formation SEO pour WordPress',
            'price' => '229€',
            'excerpt' => 'Améliorez la visibilité de votre site WordPress dans les moteurs de recherche grâce à des techniques SEO efficaces.',
            'description' => [
                'Optimisation des titres, descriptions, et balises pour le SEO.',
                'Utilisation des plugins SEO pour gérer vos métadonnées.',
                'Analyse des performances SEO et amélioration continue.',
            ],
            'category' => 'seo',
        ],
        'performance-wordpress' => [
            'title' => 'Formation sur la Performance de WordPress',
            'price' => '239€',
            'excerpt' => 'Découvrez les meilleures pratiques pour améliorer la vitesse et la performance de votre site WordPress.',
            'description' => [
                'Techniques d’optimisation des temps de chargement.',
                'Configuration de CDN et optimisation des ressources.',
                'Analyse des performances et gestion des goulets d’étranglement.',
            ],
            'category' => 'performance',
        ],
        'theme-development-wordpress' => [
            'title' => 'Formation sur le Développement de Thèmes WordPress',
            'price' => '299€',
            'excerpt' => 'Apprenez à créer des thèmes WordPress personnalisés de A à Z pour un design unique et adapté à vos besoins.',
            'description' => [
                'Structure de base d’un thème WordPress.',
                'Utilisation de PHP et CSS pour personnaliser le design.',
                'Création de modèles de page et gestion des options de thème.',
            ],
            'category' => 'development',
        ],
        'plugin-development-wordpress' => [
            'title' => 'Formation sur le Développement de Plugins WordPress',
            'price' => '299€',
            'excerpt' => 'Développez vos propres plugins WordPress pour ajouter des fonctionnalités spécifiques à votre site.',
            'description' => [
                'Introduction à la création de plugins WordPress.',
                'Développement de fonctionnalités et utilisation des hooks.',
                'Test et déploiement de plugins sur WordPress.',
            ],
            'category' => 'development',
        ],
        'multilingual-wordpress' => [
            'title' => 'Formation sur WordPress Multilingue',
            'price' => '199€',
            'excerpt' => 'Apprenez à créer et gérer un site WordPress multilingue pour atteindre un public international.',
            'description' => [
                'Configuration de plugins pour la gestion des langues.',
                'Traduction des contenus et gestion des versions multilingues.',
                'Optimisation du SEO pour les sites multilingues.',
            ],
            'category' => 'multilingual',
        ],
        'media-management-wordpress' => [
            'title' => 'Formation sur la Gestion des Médias WordPress',
            'price' => '179€',
            'excerpt' => 'Optimisez la gestion et l’utilisation des médias (images, vidéos) sur votre site WordPress.',
            'description' => [
                'Organisation et gestion des bibliothèques de médias.',
                'Optimisation des images pour le web.',
                'Intégration et gestion des vidéos et autres médias.',
            ],
            'category' => 'media',
        ],
        'ecommerce-wordpress' => [
            'title' => 'Formation sur le Commerce Électronique avec WordPress',
            'price' => '249€',
            'excerpt' => 'Transformez votre site WordPress en une plateforme de commerce électronique efficace et professionnelle.',
            'description' => [
                'Installation et configuration de WooCommerce.',
                'Gestion des produits, commandes et clients.',
                'Personnalisation de l’apparence de votre boutique en ligne.',
            ],
            'category' => 'ecommerce',
        ],
        'user-management-wordpress' => [
            'title' => 'Formation sur la Gestion des Utilisateurs WordPress',
            'price' => '179€',
            'excerpt' => 'Maîtrisez les techniques pour gérer efficacement les utilisateurs et les rôles sur votre site WordPress.',
            'description' => [
                'Configuration des rôles et permissions des utilisateurs.',
                'Gestion des inscriptions et des profils utilisateurs.',
                'Création et gestion des groupes d’utilisateurs.',
            ],
            'category' => 'user-management',
        ],
    ];

    public function index(Request $request)
    {
        $categories = $request->input('category', 'all');
        $formations = $this->formations;
    
        if ($categories !== 'all') {
            $categoriesArray = is_array($categories) ? $categories : explode(',', $categories);
    
            $formations = array_filter($this->formations, function ($formation) use ($categoriesArray) {
                $formationCategories = is_array($formation['category']) ? $formation['category'] : [$formation['category']];
                
                return !array_diff($categoriesArray, $formationCategories);
            });
        }
    
        return view('services.formation', [
            'formations' => $formations,
            'category' => $categories
        ]);
    }

    public function formation()
    {
        return view('services.formation', [
            'formations' => $this->formations
        ]);
    }    

    public function dashboardUser()
    {
        $user = auth()->user();
        $formations = $user->formations;

        return view('formations', [
            'formations' => $formations
        ]);
    }

}
