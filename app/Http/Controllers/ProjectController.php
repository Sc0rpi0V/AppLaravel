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
            'title' => 'CALF',
            'description' => 'Réalisation de simulateur pour simulation sa consommation d\'énergie...',
            'category' => 'simulateur'
        ],
        'calf' => [
            'title' => 'CALF',
            'description' => 'Refonte du site du Crédit Agricole et Ajout des simulateurs',
            'category' => 'refonte'
        ],
        'edf-enr' => [
            'title' => 'EDF-ENR',
            'description' => 'Réalisation de Bloc React Gutenberg pour l\'ensemble du site...',
            'category' => ['refonte', 'react']
        ],
        'engie' => [
            'title' => 'ENGIE',
            'description' => 'Réalisation de Bloc React Gutenberg et Gestion d\'une map...',
            'category' => ['refonte', 'react']
        ],
        'thekdo' => [
            'title' => 'THEKDO',
            'description' => 'Gestion de la partie Woocommerce et préparation d\'extract...',
            'category' => 'ecommerce'
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
        'cis-btp' => [
            'title' => 'CIS BTP',
            'description' => 'Réalisation de formulaire Salesforce...',
            'category' => 'salesforce'
        ],
        'cos-59' => [
            'title' => 'COS59',
            'description' => 'Réalisation de gestion ecommerce et TMA...',
            'category' => ['maintenance', 'ecommerce']
        ],
        'verbaere' => [
            'title' => 'VERBAERE',
            'description' => 'Réalisation de gestion ecommerce et TMA...',
            'category' => ['maintenance', 'ecommerce']
        ],
        'mercier' => [
            'title' => 'MERCIER (Auction, Auto, Art)',
            'description' => 'Réalisation de gestion ecommerce et TMA...',
            'category' => ['maintenance', 'ecommerce']
        ],
        'la-coupole' => [
            'title' => 'LACOUPOLE',
            'description' => 'Réalisation de gestion ecommerce et TMA...',
            'category' => ['maintenance', 'ecommerce']
        ],
        'terres-et-territoires' => [
            'title' => 'TERRES ET TERRITOIRES',
            'description' => 'Refonte du tunnel d\'achat et ecommerce',
            'category' => ['refonte', 'ecommerce'],
        ],
        'irts' => [
            'title' => 'IRTS HDF',
            'description' => 'Modification de leurs articles et mise en avant de contenu',
            'category' => ['maintenance', 'wordpress'],
        ],
        'lille-art-up' => [
            'title' => 'LILLE ART UP',
            'description' => 'Réalisation de maintenance et modification du site avec ACF',
            'category' => ['maintenance', 'wordpress'],
        ],
        'grenoble-art-up' => [
            'title' => 'GRENOBLE ART UP',
            'description' => 'Réalisation de maintenance et modification du site avec ACF',
            'category' => ['maintenance', 'wordpress'],
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
        $categories = $request->input('category', 'all');
        $projects = $this->projects;
    
        if ($categories !== 'all') {
            $categoriesArray = is_array($categories) ? $categories : explode(',', $categories);
    
            $projects = array_filter($this->projects, function ($project) use ($categoriesArray) {
                $projectCategories = is_array($project['category']) ? $project['category'] : [$project['category']];
                
                return !array_diff($categoriesArray, $projectCategories);
            });
        }
    
        return view('project.index', [
            'projects' => $projects,
            'category' => $categories
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
                'name' => 'CALF',
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
            'calf' => [
                'name' => 'CALF',
                'subtitle' => 'Crédit Agricole Leasing & Factoring (Refonte global du site)',
                'description' => 'Refonte du site principal et ajout des simulateurs sur le site',
                'desc-list' => [
                    'Comprendre les enheux de la transition énergétique',
                    'Mise en place de données claires et sécurisées pour le monde bancaire',
                    'Liaison des informations clients et des différents conseillers',
                    'Mise en place de méthode de calcul pour être au normes Françaises et Européennes',
                    'Gestion et connexion entre site principal et sous-site (simulateurs)'
                ],
                'role' => 'Développeur Back-End',
                'liste' => [

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
                'image' => asset('img/themes.webp'), 
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
                'image' => asset('img/plugins.webp'), 
                'category' => 'Maintenance' ,
            ],
            'blocs-wordpress' => [
                'name' => 'BLOCS WORDPRESS',
                'subtitle' => 'Blocs React Gutenberg & Gutenberg ACF',
                'description' => 'Réalisation de Bloc React Gutenberg / ACF Gutenberg',
                'desc-list' => [
                    'Mise en place de différents blocs',
                    'Répondre aux différents besoins',
                    'Blocs pour animation, mise en avant de contenu',
                    'Clean Code',
                    'Améliorer l\'expérience utilisateur',
                ],
                'role' => 'Développeur FullStack',
                'liste' => [
                    'Réalisation de de Bloc ACF',
                    'Permet la gestion de contenu de manière dynamique',
                    'Réalisation de Bloc React Gutenberg',
                    'Pré-visualisation du bloc sur la backOffice',
                    'Customisation du bloc comme on le souhaite',
                    'Permet d\'afficher des photos, vidéos, liens externes, mise en avant de contenu',
                    'Rendre le site Wordpress 100% custom',
                    'Améliorer l\'expérience utilisateur',
                ],
                'image' => asset('img/bloc-gutenberg.webp'), 
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
                    'Contributions : Participation à la création et à la gestion de contenu sur les pages et les articles du site.'
                ],
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
                'image' => asset('img/eldvarm.webp'),        
            ],
            'cis-btp' => [
                'name' => 'CIS BTP',
                'subtitle' => 'CIS BTP',
                'description' => 'Réalisation de formulaire pour gestion avec salesforce',
                'desc-list' => [
                    'Gestion des informations avec salesforce',
                    'Ajout des formulaires sur le site',
                    'Mise en place des données pour salesforce'
                ],
                'role'  => 'Développeur FullStack',
                'liste' => [
                    'Mettre en place les formulaires prévus sur le site',
                    'Prévoir un système d\'enregisgrement des données des formulaires sur le site avant envoie vers salesforce',
                    'Envoie des données à salesforce avec les valeurs et indiction prévues',
                    'Accès au backoffice salesforce pour vérification des données à envoyer',
                    'Mise à jour du thème et plugins sur le site',
                    'Gestion des performances sur le site'
                ],
                'category' => 'salesforce' ,
                'image' => asset('img/cis-btp.jpeg'),        
            ],
            'cos-59' => [
                'name' => 'COS 59',
                'subtitle' => 'COS 59',
                'description' => 'Réalisation de gestion ecommerce et TMA',
                'desc-list' => [
                ],
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
                'category' => ['Maintenance', 'ecommerce'] ,
                'image' => asset('img/cos59.png'),        
            ],
            'verbaere' => [
                'name' => 'VERBAERE',
                'subtitle' => 'VERBAERE Multisite',
                'description' => 'Réalisation de gestion ecommerce et TMA',
                'desc-list' => [
                    'Gestion des différents sites pour le client',
                    'Mise à jour du contenu',
                    'Gestion des ventes des véhicules',
                    'Mise à jour de data pour ecommerce',
                    'Maintenance Applicative',
                ],
                'role'  => 'Développeur FullStack',
                'liste' => [
                    'Mise à niveau des contenus des différents sites Verbaere',
                    'Gestion du E-commerce pour la vente des véhichules',
                    'Utilisation de template VueJs pour les listes de véhicules',
                    'Mise en place de connexion API pour récupèrer les informations des véhciules mis en vente',
                    'Maintenance Applicative de tous les sites pour (Thèmes, Plugins, Contributions, etc.)',
                ],
                'category' => ['Maintenance', 'ecommerce'] ,
                'image' => asset('img/verbaere.jpeg'),        
            ],
            'mercier' => [
                'name' => 'MERCIER (Auction, Auto, Art)',
                'subtitle' => 'Multi-sites sur concernant la vente de biens.',
                'description' => 'Réalisation de gestion ecommerce et TMA',
                'desc-list' => [
                    'Gestion des 4 sites pour l\'entreprise Mercier',
                    'Mercier.com, Mercierauction.com, Mercier-Art.com, Mercier-Auto.com',
                    'Un site vitrine et 3 sites de ventes d\'enchères en ligne',
                    'Communication avec API'
                ],
                'role'  => 'Développeur FullStack',
                'liste' => [
                    'Gestion d\'affichage des nouveautés sur la vitrine et les différents sites',
                    'Communication avec API pour récupération des oeuvres à mettre aux enchères',
                    'Gestion d\'extraction des ventes',
                    'Gestion de remplissage automatique des ventes à afficher via API',
                    'Gestion de script pour réalisation d\'extract via AJAX',
                    'Mise en place de sytème de stockage des extracts',
                    'Gestion via excel des extracts concernant les articles aux enchères',
                    'Maintenance du site pour gestion des ressources',
                    'Mise en place de système de compilation et reconverion de photos',
                    'Script pour gérer la performance du site lors de l\'import des données pour préparation à la vente',
                ],
                'category' => ['Maintenance', 'ecommerce'] ,
                'image' => asset('img/mercier.webp'),        
            ],
            'la-coupole' => [
                'name' => 'LA COUPOLE',
                'subtitle' => 'Site de présentation du monument historique',
                'description' => '',
                'desc-list' => [
                    'Comprend l\'ensemble des activités de gestion et de maintenance continue d\'un site web basé sur WordPress.',
                    'Coeur WordPress : Mise à jour et maintenance de la version principale de WordPress pour assurer la sécurité et la stabilité du site.',
                    'Thèmes : Gestion, mise à jour et personnalisation des thèmes WordPress pour répondre aux besoins esthétiques et fonctionnels du site.',
                    'Plugins : Installation, mise à jour et configuration des plugins WordPress pour ajouter des fonctionnalités au site.',
                    'Contributions : Participation à la création et à la gestion de contenu sur les pages et les articles du site.'
                ],
                'role' => 'Développeur FullStack',
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
                'category' => ['maintence', 'wordpress'],
                'image' => asset('img/la-coupole.jpeg'),
            ],
            'terres-et-territoires' => [
                'name' => 'TERRES ET TERRITOIRES',
                'subtitle' => 'Site de presse agricole',
                'description' => '',
                'desc-list' => [
                    'Améliorer le confort utilisateur',
                    'Changement de système de Ecommerce',
                    'Refonte du tunnel de commande',
                    'Refonte de la gestion de compte utilisateur',
                    'Amélioration gestion site'
                ],
                'role' => 'Développeur FullStack',
                'liste' => [
                    'Retrait de l\'ancienne gestion de Ecommerce',
                    'Passage sous Woocommerce pour gérer les produits',
                    'Retouche complète du tunnel d\'achat',
                    'Changement des produits à afficher',
                    'Utilisation de Woocommerce Subscription pour gérer les abonnements de manière automatique',
                    'Gestion des différents modes de paiement (RIB / SEPA / Carte Bancaire)',
                    'Utilisation du moyen de paiement via Crédit Agricole',
                    'Gestion des modes d\'abonnements pour les revues de presses',
                    'Gestion de cookies et rgpd lors de l\'inscription',
                    'Gestion API pour récupèrer et mettre à jour les données utilisateurs et abonnements',
                    'Mise en place de daemon pour mettre à jour les infos via API',
                    'Transfert des comptes utilisateurs de l\'ancien système vers le nouveau',
                    'Mise en place de newsletter',
                    'Amélioration des performances du site concernant l\'évolution sur la refonte',
                ],
                'category' => ['refonte', 'ecommerce'],
                'image' => asset('img/terres-et-territoires.jpeg'),
            ],
            'irts' => [
                'name' => 'IRTS HDF',
                'subtitle' => 'Site de formation spécialisé dans le secteur du travail social',
                'description' => '',
                'desc-list' => [
                    'Modification des différentes offres',
                    'Ajout de spécifité concernant la partie gestion des paiements',
                    'Maintenabilité du site pour avoir une meilleure performance'
                ],
                'role' => 'Développeur FullStack',
                'liste' => [
                    'Présentation des offres pour salariés et étudiants',
                    'Mise en place de limite sur les inscriptions',
                    'Gestion des moyens de paiements pour les différents offres',
                    'Mise en place de réduction pour les étuidants',
                    'Extract des données de commandes pour les offres afin de visualiser le nombre d\'inscrits',
                ],
                'category' => ['maintenance', 'ecommerce'],
                'image' => asset('img/irts.webp'),
            ],
            'lille-art-up' => [
                'name' => 'LILLE ART UP',
                'subtitle' => 'Site de présentation d\'art contemporain',
                'description' => '',
                'desc-list' => [
                    'Comprend l\'ensemble des activités de gestion et de maintenance continue d\'un site web basé sur WordPress.',
                    'Coeur WordPress : Mise à jour et maintenance de la version principale de WordPress pour assurer la sécurité et la stabilité du site.',
                    'Thèmes : Gestion, mise à jour et personnalisation des thèmes WordPress pour répondre aux besoins esthétiques et fonctionnels du site.',
                    'Plugins : Installation, mise à jour et configuration des plugins WordPress pour ajouter des fonctionnalités au site.',
                    'Contributions : Participation à la création et à la gestion de contenu sur les pages et les articles du site.'
                ],
                'role' => 'Développeur FullStack',
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
                'category' => ['maintenance', 'wordpress'],
                'image' => asset('img/lille-art-up.jpeg'),
            ],
            'grenoble-art-up' => [
                'name' => 'GRENOBLE ART UP',
                'subtitle' => 'Site de présentation d\'art contemporain',
                'description' => '',
                'desc-list' => [
                    'Comprend l\'ensemble des activités de gestion et de maintenance continue d\'un site web basé sur WordPress.',
                    'Coeur WordPress : Mise à jour et maintenance de la version principale de WordPress pour assurer la sécurité et la stabilité du site.',
                    'Thèmes : Gestion, mise à jour et personnalisation des thèmes WordPress pour répondre aux besoins esthétiques et fonctionnels du site.',
                    'Plugins : Installation, mise à jour et configuration des plugins WordPress pour ajouter des fonctionnalités au site.',
                    'Contributions : Participation à la création et à la gestion de contenu sur les pages et les articles du site.'
                ],
                'role' => 'Développeur FullStack',
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
                'category' => ['maintenance', 'wordpress'],
                'image' => asset('img/grenoble-art-up.jpeg'),
            ],
        ];

        if (!array_key_exists($project, $projects)) {
            abort(404);
        }

        return view('project.show', ['project' => $projects[$project]]);
    }
}
