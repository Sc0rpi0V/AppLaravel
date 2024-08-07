<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ArticleController extends Controller
{
    protected $articles = [
        'introduction' => [
            'title' => 'Introduction à WordPress',
            'excerpt' => '',
            'category' => 'intro',
        ],
        'personnalisation' => [
            'title' => 'Personnalisation de thèmes WordPress',
            'excerpt' => '',
            'category' => 'customization',
        ],
        'seo' => [
            'title' => 'SEO pour WordPress',
            'excerpt' => '',
            'category' => 'seo',
        ],
        'plugins' => [
            'title' => 'Plugins essentiels pour WordPress',
            'excerpt' => '',
            'category' => 'plugins',
        ],
    ];

    /**
     * Affiche la liste des articles.
     */
    public function index(Request $request): View {

        $category = $request->input('category', 'all');

        $articles = $this->articles;

        if ($category !== 'all') {
            $articles = array_filter($this->articles, function ($project) use ($category) {
                return $project['category'] === $category;
            });
        }

        // Renvoie la vue 'articles.index' avec une pagination des articles (25 par page)
        return view('articles.index', [
            'posts' => Article::paginate(25),
            'articles' => $articles,
            'category' => $category
        ]);
    }

    /**
     * Affiche un article spécifique.
     */
    public function show($article)
    {
        $articles = [
            'tma-ifs' => [
                'name' => 'TMA IFS',
                'subtitle' => 'Institut Français du Sang (Singapour)',
                'description' => 'Réalisation de la maintenance applicative du site :',
                'desc-list' => [
                    'Comprend l\'ensemble des activités de gestion et de maintenance continue d\'un site web basé sur WordPress.',
                    'Coeur WordPress : Mise à jour et maintenance de la version principale de WordPress pour assurer la sécurité et la stabilité du site.',
                    'Thèmes : Gestion, mise à jour et personnalisation des thèmes WordPress pour répondre aux besoins esthétiques et fonctionnels du site.',
                    'Plugins : Installation, mise à jour et configuration des plugins WordPress pour ajouter des fonctionnalités au site.',
                    'Contributions : Participation à la création et à la gestion de contenu sur les pages et les articles du site.'],
                'role'  => 'Développeur FullStack',
                'liste' => [
                    'Contribution sur les pages et articles WordPress.',
                    'Rédaction, édition et mise en forme du contenu des différentes pages et articles du site.',
                    'Ajout d\'éléments multimédia (images, vidéos) et liens pour enrichir le contenu.',
                    'Optimisation SEO (Search Engine Optimization) des pages et articles pour améliorer leur visibilité sur les moteurs de recherche.',
                    'Identification des plugins nécessitant une mise à jour.',
                    'Réalisation des mises à jour en suivant les procédures appropriées pour éviter toute interruption de service.',
                    'Rédaction d\'un listing complet et détaillé des plugins mis à jour, incluant les versions et les dates de mise à jour.',
                    'Tests post-mise à jour pour s\'assurer que les plugins fonctionnent correctement et qu\'il n\'y a pas de conflits.',
                    'Mise à jour des thèmes utilisés par le site pour bénéficier des nouvelles fonctionnalités et corrections de sécurité.',
                    'Adaptation des thèmes après mise à jour pour maintenir la cohérence visuelle et fonctionnelle du site.',
                    'Tests pour vérifier que les modifications apportées par les mises à jour sont bien intégrées sans provoquer d\'erreurs.',
                    'Identification et diagnostic des erreurs dans les fichiers PHP des thèmes.',
                    'Correction des erreurs pour améliorer la fonctionnalité et la performance du site.',
                    'Vérification des modifications pour assurer la compatibilité avec le reste du site et éviter toute régression.'
                ],
                'category' => 'Maintenance' ,
                'image' => asset('img/ifs.jpeg'),        
            ],
            'calf-mvp' => [
                'name' => 'CALF MVP',
                'subtitle' => 'Crédit Agricole Leasing & Factoring (Simulateurs Autoconsommation Solaire)',
                'description' => 'Réalisation de simulateur pour simulation sa consommation d\'énergie (Particulier / Professionnel)',
                'desc-list' => [
                    'Comprendre les enheux de la transition énergétique',
                    'Mise en place de données claires et sécurisées pour le monde bancaire',
                    'Liaison des informations clients et des différents conseillers',
                    'Mise en place de méthode de calcul pour être au normes Françaises et Européennes'
                ],
                'role' => 'Développeur Back-End',
                'liste' => [
                    'Réalisation des différents simulateurs',
                    'Mise en place de méthodes de calcul pour les simulateurs',
                    'Gestion de cookies pour les simulateurs',
                    'Mise en place des scripts js pour les simulateurs',
                    'Gestion des enregistrement des informations sur les simulateurs',
                    'Liaison et envoie des informations sur le site principal',
                    'Mise à jour des données pour les conseillers clients et transitions énergétique'
                ],
                'image' => asset('img/calf.webp'), 
                'category' => 'Maintenance' ,
            ],
            'edf-enr' => [
                'name' => 'EDF-ENR',
                'subtitle' => 'Electricité de France Energies Nouvelles Réparties',
                'description' => 'Réalisation de Bloc React Gutenberg pour l\'ensemble du site (Refonte Complète)',
                'desc-list' => [
                    'Refont Global du site EDF ENR',
                    'Gestion du code en équipe',
                    'Réalisation de bloc',
                    'Gestion de la transition énergétique',
                ],
                'role' => 'Développeur Back-End',
                'liste' => [
                    'Création de bloc React Gutenberg',
                    'Respect de la charte graphique',
                    'Création du front-end pour les blocs sur la back-office',
                    'Création de plugins React Gutenberg pour gérer les blocs',
                    'Création et gestion de mu-plugins l\'architecture du thème',
                    'Architecture propre sur le thème et clean code'
                ],
                'image' => asset('img/edfenr.webp'), 
                'category' => 'Maintenance' ,
            ],
            'engie' => [
                'name' => 'ENGIE',
                'subtitle' => 'ENGIE',
                'description' => 'Réalisation de Bloc React Gutenberg et Gestion d\'une map pour borne de recharge voiture électrique',
                'desc-list' => [
                    'Refont Global du site ENGIE',
                    'Gestion du code en équipe',
                    'Réalisation de bloc',
                    'Gestion de la transition énergétique',
                    'Ajouter une carte pour afficher les bornes de recharges électriques',
                    'Gestion du site web et de l\'app mobile avec les différentes équipes',
                ],
                'role' => 'Développeur Back-End',
                'liste' => [
                    'Création de bloc React Gutenberg',
                    'Respect de la charte graphique',
                    'Création du front-end pour les blocs sur la back-office',
                    'Création de plugins React Gutenberg pour gérer les blocs',
                    'Création et gestion de mu-plugins l\'architecture du thème',
                    'Architecture propre sur le thème et clean code',
                    'Gestion d\'une carte pour afficher les différentes bornes de rcharges électriques',
                    'Gestion API Chargetrip et Google Maps'
                ],
                'image' => asset('img/engie.jpeg'), 
                'category' => 'Maintenance' ,
            ],
            'thekdo' => [
                'name' => 'THEKDO',
                'subtitle' => 'Crédit Agricole Leasing & Factoring (Simulateurs Autoconsommation Solaire)',
                'description' => 'Gestion de la partie Woocommerce et préparation d\'extract de commande avec requête SQL',
                'desc-list' => [
                    'Demande de gestion des commandes',
                    'Demande de mise en place d\'extraction des commandes',
                    'Gestion des filtres sur les pages produits',
                ],
                'role' => 'Développeur Back-End',
                'liste' => [
                    'Création d\'extract poru les commandes',
                    'Mise en place de formulaires pour lancer les extractions',
                    'Mise en place de sécurité pour éviter les erreurs et intrusion sur les requêtes',
                    'Refonte des filtres sur les produits',
                    'Mise en place Ajax pour les filtres'
                ],
                'image' => asset('img/thekdo.webp'), 
                'category' => 'Maintenance' ,
            ],
            'theme-wordpress' => [
                'name' => 'THEME WORDPRESS',
                'subtitle' => 'Création Thèmes WordPress sur Mesure ou Modification',
                'description' => 'Création de thème WordPress',
                'desc-list' => [
                    'Création de thème Wordpress',
                    'Mise en place de structure propre',
                    'Gestion des blocs ACF et React'
                ],
                'role' => 'Développeur FullStack',
                'liste' => [
                    'Clean Architecture',
                    'Clean Code',
                    'Gestion des hooks et filtres Wordpress',
                    'Gestion et réécriture des Query sur les thèmes',
                    'Gestion des taxonomies et category'
                ],
                'image' => asset('img/ifs.jpeg'), 
                'category' => 'Maintenance' ,
            ],
            'plugins-wordpress' => [
                'name' => 'PLUGINS WORDPRESS',
                'subtitle' => 'Plugins de Sécurité, Plugins Customisable',
                'description' => 'Création de plugins WordPress',
                'desc-list' => [
                    'Mise en place de différents plugins',
                    'Répondre aux différents besoins',
                    'Plugins de Sécurité, de Mailing, de Newsletters',
                    'Clean Code',
                    'Gestion propre du backoffice',
                    'Améliorer l\'expérience utilisateur',
                ],
                'role' => 'Développeur FullStack',
                'liste' => [],
                'image' => asset('img/ifs.jpeg'), 
                'category' => 'Maintenance' ,
            ],
            'blocs-wordpress' => [
                'name' => 'BLOCS WORDPRESS',
                'subtitle' => 'Blocs React Gutenberg & Gutenberg ACF',
                'description' => 'Réalisation de Bloc React Gutenberg / ACF Gutenberg',
                'desc-list' => [
                    'Mise en place de différents blocs',
                    'Répondre aux différents besoins',
                    'Blocs pour animation, mise en avant',
                    'Clean Code',
                    'Gestion propre du backoffice',
                    'Améliorer l\'expérience utilisateur',
                ],
                'role' => 'Développeur FullStack',
                'liste' => [],
                'image' => asset('img/ifs.jpeg'), 
                'category' => 'Maintenance' ,
            ],
            'tma-eldvarm' => [
                'name' => 'TMA ELDVARM',
                'subtitle' => 'ELDVARM',
                'description' => 'Réalisation de la maintenance applicative du site :',
                'desc-list' => [
                    'Comprend l\'ensemble des activités de gestion et de maintenance continue d\'un site web basé sur WordPress.',
                    'Coeur WordPress : Mise à jour et maintenance de la version principale de WordPress pour assurer la sécurité et la stabilité du site.',
                    'Thèmes : Gestion, mise à jour et personnalisation des thèmes WordPress pour répondre aux besoins esthétiques et fonctionnels du site.',
                    'Plugins : Installation, mise à jour et configuration des plugins WordPress pour ajouter des fonctionnalités au site.',
                    'Contributions : Participation à la création et à la gestion de contenu sur les pages et les articles du site.'],
                'role'  => 'Développeur FullStack',
                'liste' => [
                    'Contribution sur les pages et articles WordPress.',
                    'Rédaction, édition et mise en forme du contenu des différentes pages et articles du site.',
                    'Ajout d\'éléments multimédia (images, vidéos) et liens pour enrichir le contenu.',
                    'Optimisation SEO (Search Engine Optimization) des pages et articles pour améliorer leur visibilité sur les moteurs de recherche.',
                    'Identification des plugins nécessitant une mise à jour.',
                    'Réalisation des mises à jour en suivant les procédures appropriées pour éviter toute interruption de service.',
                    'Rédaction d\'un listing complet et détaillé des plugins mis à jour, incluant les versions et les dates de mise à jour.',
                    'Tests post-mise à jour pour s\'assurer que les plugins fonctionnent correctement et qu\'il n\'y a pas de conflits.',
                    'Mise à jour des thèmes utilisés par le site pour bénéficier des nouvelles fonctionnalités et corrections de sécurité.',
                    'Adaptation des thèmes après mise à jour pour maintenir la cohérence visuelle et fonctionnelle du site.',
                    'Tests pour vérifier que les modifications apportées par les mises à jour sont bien intégrées sans provoquer d\'erreurs.',
                    'Identification et diagnostic des erreurs dans les fichiers PHP des thèmes.',
                    'Correction des erreurs pour améliorer la fonctionnalité et la performance du site.',
                    'Vérification des modifications pour assurer la compatibilité avec le reste du site et éviter toute régression.'
                ],
                'category' => 'Maintenance' ,
                'image' => asset('img/ifs.jpeg'),        
            ],
        ];

        if (!array_key_exists($article, $articles)) {
            abort(404);
        }

        return view('articles.show', ['articles' => $articles[$article]]);
    }
}
