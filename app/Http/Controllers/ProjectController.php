<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $projects = [
        'tma-ifs' => [
            'title' => 'TMA IFS',
            'description' => 'Réalisation de la maintenance applicative du site...',
            'category' => 'maintenance'
        ],
        'calf-mvp' => [
            'title' => 'CALF MVP',
            'description' => 'Réalisation de simulateur pour simulation sa consommation d\'énergie...',
            'category' => 'simulateur'
        ],
        'edf-enr' => [
            'title' => 'EDF-ENR',
            'description' => 'Réalisation de Bloc React Gutenberg pour l\'ensemble du site...',
            'category' => 'react'
        ],
        'engie' => [
            'title' => 'ENGIE',
            'description' => 'Réalisation de Bloc React Gutenberg et Gestion d\'une map...',
            'category' => 'react'
        ],
        'thekdo' => [
            'title' => 'THEKDO',
            'description' => 'Gestion de la partie Woocommerce et préparation d\'extract...',
            'category' => 'woocommerce'
        ],
        'theme-wordpress' => [
            'title' => 'THEME WORDPRESS',
            'description' => 'Création de thème WordPress',
            'category' => 'wordpress'
        ],
        'plugins-wordpress' => [
            'title' => 'PLUGINS WORDPRESS',
            'description' => 'Création de plugins WordPress',
            'category' => 'wordpress'
        ],
        'blocs-wordpress' => [
            'title' => 'BLOCS WORDPRESS',
            'description' => 'Réalisation de Bloc React Gutenberg / ACF Gutenberg',
            'category' => 'wordpress'
        ],
        'tma-eldvarm' => [
            'title' => 'TMA ELDVARM',
            'description' => 'Réalisation de la maintenance applicative du site...',
            'category' => 'maintenance'
        ],
    ];

    /**
     * Show the project page.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $category = $request->input('category', 'all');
        
        $projects = $this->projects;
        
        if ($category !== 'all') {
            $projects = array_filter($this->projects, function ($project) use ($category) {
                return $project['category'] === $category;
            });
        }

        return view('project.index', [
            'projects' => $projects,
            'category' => $category
        ]);
    }

    public function show($project)
    {
        $projects = [
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
                'image' => asset('img/calf.png'), 
                'category' => 'Maintenance' ,
            ],
            'edf-enr' => [
                'name' => 'EDF-ENR',
                'subtitle' => 'Electricité de France Energies Nouvelles Réparties',
                'description' => 'Réalisation de Bloc React Gutenberg pour l\'ensemble du site (Refonte Complète)',
                'image' => asset('img/edfenr.webp'), 
                'category' => 'Maintenance' ,
            ],
            'engie' => [
                'name' => 'ENGIE',
                'subtitle' => 'ENGIE',
                'description' => 'Réalisation de Bloc React Gutenberg et Gestion d\'une map pour borne de recharge voiture électrique',
                'image' => asset('img/engie.jpeg'), 
                'category' => 'Maintenance' ,
            ],
            'thekdo' => [
                'name' => 'THEKDO',
                'subtitle' => 'Crédit Agricole Leasing & Factoring (Simulateurs Autoconsommation Solaire)',
                'description' => 'Gestion de la partie Woocommerce et préparation d\'extract de commande avec requête SQL',
                'image' => asset('img/thekdo.webp'), 
                'category' => 'Maintenance' ,
            ],
            'theme-wordpress' => [
                'name' => 'THEME WORDPRESS',
                'subtitle' => 'Création Thèmes WordPress sur Mesure ou Modification',
                'description' => 'Création de thème WordPress',
                'image' => asset('img/ifs.jpeg'), 
                'category' => 'Maintenance' ,
            ],
            'plugins-wordpress' => [
                'name' => 'PLUGINS WORDPRESS',
                'subtitle' => 'Plugins de Sécurité, Plugins Customisable',
                'description' => 'Création de plugins WordPress',
                'image' => asset('img/ifs.jpeg'), 
                'category' => 'Maintenance' ,
            ],
            'blocs-wordpress' => [
                'name' => 'BLOCS WORDPRESS',
                'subtitle' => 'Blocs React Gutenberg & Gutenberg ACF',
                'description' => 'Réalisation de Bloc React Gutenberg / ACF Gutenberg',
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

        if (!array_key_exists($project, $projects)) {
            abort(404);
        }

        return view('project.show', ['project' => $projects[$project]]);
    }
}
