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
}
