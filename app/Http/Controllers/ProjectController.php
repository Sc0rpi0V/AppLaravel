<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Show the project page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projects = [
            'tma-ifs' => [
                'title' => 'TMA IFS',
                'description' => 'Réalisation de la maintenance applicative du site...'
            ],
            'calf-mvp' => [
                'title' => 'CALF MVP',
                'description' => 'Réalisation de simulateur pour simulation sa consommation d\'énergie...'
            ],
            'edf-enr' => [
                'title' => 'EDF-ENR',
                'description' => 'Réalisation de Bloc React Gutenberg pour l\'ensemble du site...'
            ],
            'engie' => [
                'title' => 'ENGIE',
                'description' => 'Réalisation de Bloc React Gutenberg et Gestion d\'une map...'
            ],
            'thekdo' => [
                'title' => 'THEKDO',
                'description' => 'Gestion de la partie Woocommerce et préparation d\'extract...'
            ],
            'theme-wordpress' => [
                'title' => 'THEME WORDPRESS',
                'description' => 'Création de thème WordPress'
            ],
            'plugins-wordpress' => [
                'title' => 'PLUGINS WORDPRESS',
                'description' => 'Création de plugins WordPress'
            ],
            'blocs-wordpress' => [
                'title' => 'BLOCS WORDPRESS',
                'description' => 'Réalisation de Bloc React Gutenberg / ACF Gutenberg'
            ],
        ];
    
        return view('project.index', ['projects' => $projects]);
    }      

    public function show($project)
    {
        $projects = [
            'tma-ifs' => [
                'name' => 'TMA IFS',
                'description' => 'Réalisation de la maintenance applicative du site :
                    Comprend l\'ensemble des activités de gestion et de maintenance continue d\'un site web basé sur WordPress.
                    Coeur WordPress : Mise à jour et maintenance de la version principale de WordPress pour assurer la sécurité et la stabilité du site.
                    Thèmes : Gestion, mise à jour et personnalisation des thèmes WordPress pour répondre aux besoins esthétiques et fonctionnels du site.
                    Plugins : Installation, mise à jour et configuration des plugins WordPress pour ajouter des fonctionnalités au site.
                    Contributions : Participation à la création et à la gestion de contenu sur les pages et les articles du site.
                    Tâches spécifiques réalisées :
                    - Contribution sur les pages et articles WordPress :
                    - Rédaction, édition et mise en forme du contenu des différentes pages et articles du site.
                    - Ajout d\'éléments multimédia (images, vidéos) et liens pour enrichir le contenu.
                    - Optimisation SEO (Search Engine Optimization) des pages et articles pour améliorer leur visibilité sur les moteurs de recherche.
                    - Mise à jour des plugins :
                    - Identification des plugins nécessitant une mise à jour.
                    - Réalisation des mises à jour en suivant les procédures appropriées pour éviter toute interruption de service.
                    - Rédaction d\'un listing complet et détaillé des plugins mis à jour, incluant les versions et les dates de mise à jour.
                    - Tests post-mise à jour pour s\'assurer que les plugins fonctionnent correctement et qu\'il n\'y a pas de conflits.
                    - Mise à jour des thèmes :
                    - Mise à jour des thèmes utilisés par le site pour bénéficier des nouvelles fonctionnalités et corrections de sécurité.
                    - Adaptation des thèmes après mise à jour pour maintenir la cohérence visuelle et fonctionnelle du site.
                    - Tests pour vérifier que les modifications apportées par les mises à jour sont bien intégrées sans provoquer d\'erreurs.
                    - Correction des erreurs sur les fichiers thèmes PHP :
                    - Identification et diagnostic des erreurs dans les fichiers PHP des thèmes.
                    - Correction des erreurs pour améliorer la fonctionnalité et la performance du site.
                    - Vérification des modifications pour assurer la compatibilité avec le reste du site et éviter toute régression.',            
            ],
            'calf-mvp' => [
                'name' => 'CALF MVP',
                'description' => 'Réalisation de simulateur pour simulation sa consommation d\'énergie (Particulier / Professionnel)'
            ],
            'edf-enr' => [
                'name' => 'EDF-ENR',
                'description' => 'Réalisation de Bloc React Gutenberg pour l\'ensemble du site (Refonte Complète)'
            ],
            'engie' => [
                'name' => 'ENGIE',
                'description' => 'Réalisation de Bloc React Gutenberg et Gestion d\'une map pour borne de recharge voiture électrique'
            ],
            'thekdo' => [
                'name' => 'THEKDO',
                'description' => 'Gestion de la partie Woocommerce et préparation d\'extract de commande avec requête SQL'
            ],
            'theme-wordpress' => [
                'name' => 'THEME WORDPRESS',
                'description' => 'Création de thème WordPress'
            ],
            'plugins-wordpress' => [
                'name' => 'PLUGINS WORDPRESS',
                'description' => 'Création de plugins WordPress'
            ],
            'blocs-wordpress' => [
                'name' => 'BLOCS WORDPRESS',
                'description' => 'Réalisation de Bloc React Gutenberg / ACF Gutenberg'
            ],
        ];

        if (!array_key_exists($project, $projects)) {
            abort(404);
        }

        return view('project.show', ['project' => $projects[$project]]);
    }
}
