<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function show()
    {
        $newsletters = [
            'opti-news' => [
                'title' => 'Optimisation des Performances de WordPress',
                'subtitle' => 'Améliorez les Performances de Votre Site WordPress',
                'description' => '',
                'desc-questions' => [
                    'Pourquoi optimiser les performances de votre site WordPress ?',
                    '1. Utilisez un plugin de cache',
                    '2. Optimisez vos images',
                    '3. Minimisez les fichiers CSS et JS',
                ],
                'desc-responses' => [
                    'Un site web rapide est crucial pour offrir une bonne expérience utilisateur et améliorer votre classement sur les moteurs de recherche. 
                        Découvrez nos conseils pour accélérer votre site WordPress.',
                    'Le cache permet de stocker temporairement des versions statiques de votre site, réduisant ainsi les temps de chargement. 
                        Des plugins comme WP Super Cache ou W3 Total Cache sont des incontournables.',
                    'Les images non optimisées peuvent ralentir considérablement votre site. Utilisez un outil comme Smush ou Imagify pour 
                        compresser vos images sans perte de qualité.',
                    'La minification consiste à supprimer les espaces et les commentaires inutiles dans vos fichiers CSS et JavaScript. 
                        Vous pouvez utiliser des plugins comme Autoptimize pour le faire automatiquement.',
                ],
                'info' => 'Pour plus de conseils sur l\'optimisation de WordPress, suivez notre blog ou contactez notre support.'
            ],
            'seo-news' => [
                'title' => 'Gestion du SEO pour WordPress',
                'subtitle' => 'Boostez votre SEO sur WordPress',
                'description' => '',
                'desc-questions' => [
                    'Les bases du SEO sur WordPress',
                    '1. Utilisez un plugin SEO',
                    '2. Créez des contenus de qualité',
                    '3. Optimisez la vitesse de votre site'
                ],
                'desc-responses' => [
                    'Améliorer votre référencement naturel est essentiel pour attirer plus de visiteurs sur votre site. 
                        Voici quelques techniques SEO simples à mettre en place sur WordPress.',
                    'Yoast SEO et Rank Math sont des plugins populaires pour gérer les aspects techniques du SEO sur votre site. 
                        Ils vous aident à optimiser vos titres, méta-descriptions, et plus encore.',
                    'Les moteurs de recherche privilégient les sites offrant des contenus pertinents et bien structurés. 
                        Pensez à utiliser les bons mots-clés et à structurer vos articles avec des sous-titres (H2, H3).',
                    'Comme mentionné dans notre précédente newsletter, la vitesse de chargement de votre site influence votre SEO. 
                        Assurez-vous que votre site se charge rapidement pour améliorer votre positionnement.',
                ],
                'info' => 'Restez à jour avec les dernières astuces SEO en suivant notre blog',
            ],
            'secu-news' => [
                'title' => 'Sécurisation de votre site WordPress',
                'subtitle' => 'Protégez votre site contre les menaces',
                'description' => '',
                'desc-questions' => [
                    'Pourquoi sécuriser votre site WordPress ?',
                    '1. Mettez à jour WordPress régulièrement',
                    '2. Utilisez un plugin de sécurité',
                    '3. Sauvegardez régulièrement votre site'
                ],
                'desc-responses' => [
                    'La sécurité de votre site WordPress est primordiale pour éviter les attaques et les pertes de données. 
                        Voici quelques pratiques essentielles pour renforcer la sécurité de votre site.',
                    'Les mises à jour incluent souvent des correctifs de sécurité importants. Assurez-vous de toujours utiliser la dernière version de WordPress 
                        ainsi que de ses plugins et thèmes.',
                    'Des plugins comme Wordfence ou iThemes Security peuvent vous aider à surveiller et protéger votre site contre les attaques.',
                    'En cas de problème, il est essentiel de pouvoir restaurer votre site. Utilisez des plugins comme UpdraftPlus pour effectuer des sauvegardes régulières de vos données.',
                ],
                'info' => 'Protégez votre site avec nos recommandations. Contactez-nous pour en savoir plus.',
            ],
            'save-news' => [
                'title' => 'Sauvegarde de votre site WordPress',
                'subtitle' => 'Assurez la pérennité de vos données',
                'description' => '',
                'desc-questions' => [
                    'Pourquoi sauvegarder votre site WordPress ?',
                    '1. Utilisez un plugin de sauvegarde automatique',
                    '2. Stockez vos sauvegardes hors du serveur',
                    '3. Testez la restauration de vos sauvegardes'
                ],
                'desc-responses' => [
                    'Les sauvegardes régulières sont essentielles pour protéger votre site contre les pertes de données. 
                        Voici comment vous assurer que vos données sont en sécurité.',
                    'Utilisez des plugins comme UpdraftPlus ou BackWPup pour automatiser vos sauvegardes.',
                    'Conservez vos sauvegardes dans un endroit sécurisé, comme un stockage en cloud, pour éviter toute perte en cas de problème avec votre serveur.',
                    'Effectuez des tests réguliers de restauration pour vous assurer que vos sauvegardes sont fonctionnelles.',
                ],
                'info' => 'Pour plus de détails sur les meilleures pratiques de sauvegarde, consultez notre guide complet.',
            ],
            'plugins-news' => [
                'title' => 'Les Meilleurs Plugins WordPress',
                'subtitle' => 'Améliorez les fonctionnalités de votre site',
                'description' => '',
                'desc-questions' => [
                    'Quels plugins pour quelles fonctionnalités ?',
                    '1. Plugins SEO',
                    '2. Plugins de sécurité',
                    '3. Plugins de performance'
                ],
                'desc-responses' => [
                    'Découvrez les plugins indispensables pour chaque aspect de la gestion de votre site WordPress.',
                    'Yoast SEO et Rank Math pour améliorer le référencement naturel de votre site.',
                    'Wordfence et iThemes Security pour protéger votre site contre les menaces en ligne.',
                    'WP Super Cache et Autoptimize pour optimiser les performances de votre site.',
                ],
                'info' => 'Découvrez notre sélection des meilleurs plugins WordPress dans notre article dédié.',
            ],
            'bdd-news' => [
                'title' => 'Gestion de la Base de Données WordPress',
                'subtitle' => 'Optimisez et sécurisez votre base de données',
                'description' => '',
                'desc-questions' => [
                    'Pourquoi optimiser votre base de données ?',
                    '1. Nettoyez votre base de données',
                    '2. Sauvegardez régulièrement votre base de données',
                    '3. Utilisez des plugins pour optimiser la base de données'
                ],
                'desc-responses' => [
                    'Une base de données bien entretenue permet de maintenir des performances optimales pour votre site.',
                    'Supprimez les révisions de posts, les commentaires indésirables, et autres données inutiles.',
                    'Assurez-vous que votre base de données est régulièrement sauvegardée pour éviter toute perte.',
                    'Des plugins comme WP-Optimize peuvent vous aider à maintenir votre base de données en bon état.',
                ],
                'info' => 'Pour plus d\'astuces sur la gestion de la base de données, consultez notre guide.',
            ],
            'versioning-news' => [
                'title' => 'Gestion des Versions de WordPress',
                'subtitle' => 'Gardez votre site à jour en toute sécurité',
                'description' => '',
                'desc-questions' => [
                    'Pourquoi mettre à jour votre site régulièrement ?',
                    '1. Mises à jour de sécurité',
                    '2. Mises à jour de fonctionnalité',
                    '3. Sauvegarde avant mise à jour'
                ],
                'desc-responses' => [
                    'Les mises à jour régulières sont essentielles pour la sécurité et les performances de votre site.',
                    'Les mises à jour de sécurité corrigent les failles connues, protégeant votre site contre les attaques.',
                    'Les mises à jour apportent aussi de nouvelles fonctionnalités qui peuvent améliorer votre site.',
                    'Avant toute mise à jour, assurez-vous d\'avoir une sauvegarde récente de votre site.',
                ],
                'info' => 'Pour en savoir plus sur la gestion des versions de WordPress, suivez nos articles spécialisés.',
            ],
            'categorie-news' => [
                'title' => 'Gestion des Catégories sur WordPress',
                'subtitle' => 'Organisez efficacement votre contenu',
                'description' => '',
                'desc-questions' => [
                    'Pourquoi organiser vos articles en catégories ?',
                    '1. Créez des catégories pertinentes',
                    '2. Assurez-vous d\'une bonne hiérarchie',
                    '3. Évitez les catégories redondantes'
                ],
                'desc-responses' => [
                    'Une bonne organisation des catégories aide vos visiteurs à naviguer facilement sur votre site.',
                    'Choisissez des catégories qui reflètent le contenu de vos articles et qui aident au référencement.',
                    'Organisez vos catégories de manière logique pour faciliter la navigation.',
                    'Évitez de créer trop de catégories similaires, ce qui peut désorienter les utilisateurs.',
                ],
                'info' => 'Pour des conseils sur l\'organisation des catégories, consultez notre article dédié.',
            ],
            'taxonomy-news' => [
                'title' => 'Utilisation des Taxonomies sur WordPress',
                'subtitle' => 'Maximisez l\'organisation de votre contenu',
                'description' => '',
                'desc-questions' => [
                    'Pourquoi utiliser des taxonomies personnalisées ?',
                    '1. Créez des taxonomies personnalisées',
                    '2. Utilisez des taxonomies pour améliorer le SEO',
                    '3. Affichez les taxonomies sur votre site'
                ],
                'desc-responses' => [
                    'Les taxonomies personnalisées permettent de mieux organiser et classer vos contenus.',
                    'Créez des taxonomies qui répondent à des besoins spécifiques de votre site.',
                    'Les taxonomies bien utilisées peuvent améliorer la structure et le référencement de votre site.',
                    'Affichez vos taxonomies dans les barres latérales ou en bas des articles pour une meilleure navigation.',
                ],
                'info' => 'Pour en savoir plus sur les taxonomies, consultez notre guide complet.',
            ],
            'roles-news' => [
                'title' => 'Gestion des Rôles et Permissions sur WordPress',
                'subtitle' => 'Contrôlez l\'accès à votre site',
                'description' => '',
                'desc-questions' => [
                    'Pourquoi utiliser des rôles et permissions ?',
                    '1. Définissez les rôles utilisateurs',
                    '2. Personnalisez les permissions',
                    '3. Surveillez les activités des utilisateurs'
                ],
                'desc-responses' => [
                    'Les rôles et permissions vous permettent de gérer qui peut accéder à quelles parties de votre site.',
                    'Définissez les rôles (administrateur, éditeur, auteur, etc.) en fonction des besoins de votre équipe.',
                    'Personnalisez les permissions pour restreindre ou accorder l\'accès à certaines fonctionnalités.',
                    'Utilisez des plugins pour surveiller les activités des utilisateurs et assurer la sécurité.',
                ],
                'info' => 'Pour plus de détails sur la gestion des rôles, suivez notre guide spécialisé.',
            ],
            'themes-news' => [
                'title' => 'Choix et Personnalisation des Thèmes WordPress',
                'subtitle' => 'Créez un site unique avec les bons thèmes',
                'description' => '',
                'desc-questions' => [
                    'Pourquoi choisir un bon thème WordPress ?',
                    '1. Critères de choix d\'un thème',
                    '2. Personnalisation du thème',
                    '3. Testez la compatibilité du thème'
                ],
                'desc-responses' => [
                    'Le choix du thème influence l\'apparence et les fonctionnalités de votre site.',
                    'Choisissez un thème qui correspond à votre identité visuelle et qui est bien codé.',
                    'Personnalisez votre thème pour qu\'il reflète fidèlement votre marque.',
                    'Testez la compatibilité du thème avec vos plugins et assurez-vous qu\'il est responsive.',
                ],
                'info' => 'Pour découvrir les meilleurs thèmes WordPress, consultez notre sélection.',
            ],
            'widgets-news' => [

            ],
            'permalink-news' => [
            
            ],
            'website-news' => [

            ],
        ];

        return view('newsletter.show', ['newsletters' => $newsletters]);
    }
}