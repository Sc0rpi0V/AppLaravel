<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ArticleController extends Controller
{
    protected $articles = [
        'introduction' => [
            'title' => 'Introduction à WordPress',
            'excerpt' => 'WordPress est un système de gestion de contenu (CMS) qui permet de créer et de gérer facilement des sites web.',
            'category' => 'introduction',
        ],
        'roles_utilisateurs' => [
            'title' => 'Comprendre les rôles des utilisateurs dans WordPress',
            'excerpt' => 'Apprenez à gérer les rôles et permissions des utilisateurs sur votre site WordPress pour mieux contrôler l\'accès à votre contenu.',
            'category' => 'introduction',
        ],
        'personnalisation' => [
            'title' => 'Personnalisation de thèmes WordPress',
            'excerpt' => 'La personnalisation des thèmes WordPress vous permet de donner une identité unique à votre site.',
            'category' => 'customization',
        ],
        'customizer_avance' => [
            'title' => 'Personnalisation avancée avec le Customizer',
            'excerpt' => 'Explorez les fonctionnalités avancées du Customizer WordPress pour modifier l\'apparence de votre site en profondeur.',
            'category' => 'customization',
        ],
        'seo' => [
            'title' => 'SEO pour WordPress',
            'excerpt' => 'Le SEO (Search Engine Optimization) est essentiel pour améliorer la visibilité de votre site sur les moteurs de recherche.',
            'category' => 'seo',
        ],
        'balises_html_seo' => [
            'title' => 'Optimisation des balises HTML pour le SEO',
            'excerpt' => 'Maximisez la visibilité de votre site WordPress en optimisant les balises HTML essentielles pour le SEO.',
            'category' => 'seo',
        ],
        'plugins' => [
            'title' => 'Plugins essentiels pour WordPress',
            'excerpt' => 'Les plugins permettent d\'ajouter des fonctionnalités supplémentaires à votre site WordPress, sans avoir à coder.',
            'category' => 'plugins',
        ],
        'securite_donnees_plugins' => [
            'title' => 'Plugins de sécurité pour protéger les données utilisateurs',
            'excerpt' => 'Découvrez les plugins qui vous aideront à sécuriser les données sensibles de vos utilisateurs sur WordPress.',
            'category' => 'plugins',
        ],
        'security' => [
            'title' => 'Sécuriser son site WordPress',
            'excerpt' => 'Protégez votre site WordPress des attaques malveillantes avec ces conseils de sécurité essentiels.',
            'category' => 'security',
        ],
        'protection_spam' => [
            'title' => 'Protection contre le spam sur WordPress',
            'excerpt' => 'Apprenez à protéger votre site WordPress contre le spam grâce à des plugins et des réglages de sécurité efficaces.',
            'category' => 'security',
        ],
        'backup' => [
            'title' => 'Sauvegarde de votre site WordPress',
            'excerpt' => 'Apprenez à effectuer des sauvegardes régulières pour protéger votre contenu et restaurer votre site en cas de problème.',
            'category' => 'backup',
        ],
        'backup_cloud' => [
            'title' => 'Sauvegarder WordPress sur le Cloud',
            'excerpt' => 'Assurez la sécurité de votre site en apprenant à configurer des sauvegardes automatiques vers le Cloud avec WordPress.',
            'category' => 'backup',
        ],
        'performance' => [
            'title' => 'Améliorer la performance de votre site WordPress',
            'excerpt' => 'Optimisez la vitesse de chargement de votre site pour une meilleure expérience utilisateur et un meilleur référencement.',
            'category' => 'performance',
        ],
        'optimisation_bdd' => [
            'title' => 'Optimisation de la base de données WordPress',
            'excerpt' => 'Améliorez la performance de votre site en nettoyant et optimisant régulièrement la base de données WordPress.',
            'category' => 'performance',
        ],
        'ecommerce' => [
            'title' => 'Créer une boutique en ligne avec WordPress',
            'excerpt' => 'Transformez votre site WordPress en une boutique en ligne performante grâce à WooCommerce.',
            'category' => 'ecommerce',
        ],
        'produits_numeriques' => [
            'title' => 'Gestion des produits numériques avec WooCommerce',
            'excerpt' => 'Apprenez à configurer et vendre des produits numériques via WooCommerce sur votre site WordPress.',
            'category' => 'ecommerce',
        ],
    ];

    /**
     * Affiche la liste des articles.
     */
    public function index(Request $request) {

        $category = $request->input('category', 'all');

        $articles = $this->articles;

        if ($category !== 'all') {
            $articles = array_filter($this->articles, function ($article) use ($category) {
                return $article['category'] === $category;
            });
        }

        return view('articles.index', [
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
            'introduction' => [
                'name' => 'Introduction à WordPress',
                'subtitle' => 'Découvrez les bases de WordPress',
                'presentation' => 'WordPress est un système de gestion de contenu (CMS) qui permet de créer et de gérer facilement des sites web.',
                'desc-list' => [
                    'Comprendre les fonctionnalités de base de WordPress.',
                    'Apprendre à installer et configurer WordPress.',
                    'Créer des pages et des articles.',
                    'Gérer les thèmes et les plugins.',
                ],
                'liste' => [
                    [
                        'title' => 'Installation et configuration de WordPress',
                        'details' => 'L\'installation de WordPress implique le téléchargement du logiciel depuis WordPress.org, la création d\'une base de données sur votre serveur web, et la configuration des fichiers de WordPress pour se connecter à cette base de données. Une fois installé, vous pouvez configurer votre site en personnalisant les paramètres généraux, en choisissant un thème et en installant des plugins pour ajouter des fonctionnalités supplémentaires.'
                    ],
                    [
                        'title' => 'Création et gestion de contenu',
                        'details' => 'WordPress permet de créer différents types de contenu tels que des pages et des articles. Les pages sont utilisées pour des contenus statiques comme la page "À propos", tandis que les articles sont destinés à des contenus dynamiques, souvent utilisés pour les blogs. La gestion de contenu inclut l\'édition de texte, l\'ajout de médias (images, vidéos), la catégorisation et le marquage des articles pour une meilleure organisation et navigation.'
                    ],
                    [
                        'title' => 'Personnalisation des thèmes et des plugins',
                        'details' => 'Les thèmes déterminent l\'apparence de votre site WordPress. Vous pouvez choisir parmi des milliers de thèmes gratuits ou payants, et les personnaliser via le Customizer de WordPress pour changer les couleurs, les polices, et la disposition. Les plugins, quant à eux, ajoutent des fonctionnalités à votre site. Il en existe pour presque tous les besoins, de la sécurité à l\'optimisation SEO, en passant par les réseaux sociaux et les formulaires de contact.'
                    ],
                ],
                'category' => 'introduction',
                'image' => asset('img/intro.jpeg'),
            ],
            'roles_utilisateurs' => [
                'name' => 'Comprendre les rôles des utilisateurs dans WordPress',
                'subtitle' => 'Gérer les accès et permissions',
                'presentation' => 'Apprenez à gérer les rôles et permissions des utilisateurs sur votre site WordPress pour mieux contrôler l\'accès à votre contenu.',
                'desc-list' => [
                    'Comprendre les différents rôles d\'utilisateurs.',
                    'Attribuer et modifier les permissions.',
                    'Créer des rôles personnalisés.',
                    'Gestion des utilisateurs multiples.',
                ],
                'liste' => [
                    [
                        'title' => 'Comprendre les différents rôles d\'utilisateurs',
                        'details' => 'WordPress propose plusieurs rôles d\'utilisateurs par défaut tels que l\'administrateur, l\'éditeur, l\'auteur, le contributeur et le souscripteur. Chaque rôle a un ensemble spécifique de permissions qui détermine ce que l\'utilisateur peut et ne peut pas faire sur le site.'
                    ],
                    [
                        'title' => 'Attribuer et modifier les permissions',
                        'details' => 'Les permissions des rôles peuvent être modifiées en utilisant des plugins comme User Role Editor. Cela vous permet de personnaliser ce que chaque rôle peut faire, comme publier des articles, gérer les plugins, ou modifier les pages.'
                    ],
                    [
                        'title' => 'Créer des rôles personnalisés',
                        'details' => 'Dans certains cas, vous aurez peut-être besoin de créer des rôles personnalisés pour des besoins spécifiques. Des plugins comme Members permettent de créer facilement de nouveaux rôles avec des permissions adaptées.'
                    ],
                    [
                        'title' => 'Gestion des utilisateurs multiples',
                        'details' => 'La gestion d\'un site avec plusieurs utilisateurs nécessite une organisation et une gestion des accès rigoureuse pour éviter les conflits et les erreurs. WordPress offre des outils intégrés pour gérer cela, ainsi que des plugins pour des besoins plus complexes.'
                    ],
                ],
                'category' => 'introduction',
                'image' => asset('img/roles.jpeg'),
            ],
            'personnalisation' => [
                'name' => 'Personnalisation de thèmes WordPress',
                'subtitle' => 'Apprenez à personnaliser votre site WordPress',
                'presentation' => 'La personnalisation des thèmes WordPress vous permet de donner une identité unique à votre site.',
                'desc-list' => [
                    'Choisir le bon thème pour votre site.',
                    'Personnaliser l\'apparence via le Customizer.',
                    'Modifier les fichiers de thème.',
                    'Utiliser des plugins pour étendre les fonctionnalités.',
                ],
                'liste' => [
                    [
                        'title' => 'Choisir le bon thème pour votre site',
                        'details' => 'Il est important de choisir un thème qui correspond à l\'esthétique et aux fonctionnalités nécessaires pour votre site. Vous pouvez explorer le répertoire de thèmes de WordPress ou acheter des thèmes premium pour plus de fonctionnalités.'
                    ],
                    [
                        'title' => 'Personnaliser l\'apparence via le Customizer',
                        'details' => 'Le Customizer de WordPress permet de modifier facilement l\'apparence de votre site en temps réel. Vous pouvez changer les couleurs, les polices, le logo, et bien plus encore.'
                    ],
                    [
                        'title' => 'Modifier les fichiers de thème',
                        'details' => 'Pour des personnalisations avancées, vous pouvez modifier les fichiers de thème directement. Il est recommandé d\'utiliser un thème enfant pour éviter de perdre vos modifications lors des mises à jour du thème principal.'
                    ],
                    [
                        'title' => 'Utiliser des plugins pour étendre les fonctionnalités',
                        'details' => 'Il existe de nombreux plugins qui peuvent ajouter des options de personnalisation supplémentaires, comme les constructeurs de pages, les plugins de mise en page, et bien plus encore.'
                    ],
                ],
                'category' => 'customisation',
                'image' => asset('img/customisation.jpeg'),
            ],
            'customizer_avance' => [
                'name' => 'Personnalisation avancée avec le Customizer',
                'subtitle' => 'Modifiez l\'apparence de votre site en profondeur',
                'presentation' => 'Explorez les fonctionnalités avancées du Customizer WordPress pour modifier l\'apparence de votre site en profondeur.',
                'desc-list' => [
                    'Utiliser les sections avancées du Customizer.',
                    'Personnaliser les CSS via le Customizer.',
                    'Aperçu des changements en temps réel.',
                ],
                'liste' => [
                    [
                        'title' => 'Utiliser les sections avancées du Customizer',
                        'details' => 'Le Customizer permet d\'accéder à des options avancées comme la gestion des menus, des widgets, et des arrière-plans. Apprenez à exploiter ces fonctionnalités pour une personnalisation plus poussée de votre thème.'
                    ],
                    [
                        'title' => 'Personnaliser les CSS via le Customizer',
                        'details' => 'Le Customizer vous permet d\'ajouter du CSS personnalisé directement depuis l\'interface. Cela est utile pour des ajustements spécifiques que vous ne pouvez pas réaliser avec les options de thème standard.'
                    ],
                    [
                        'title' => 'Aperçu des changements en temps réel',
                        'details' => 'L\'un des plus grands avantages du Customizer est la possibilité de voir un aperçu des modifications en temps réel. Vous pouvez tester différents paramètres et voir instantanément comment ils affectent l\'apparence de votre site avant de les appliquer.'
                    ],
                ],
                'category' => 'customization',
                'image' => asset('img/customizer_avance.jpeg'),
            ],
            'seo' => [
                'name' => 'SEO pour WordPress',
                'subtitle' => 'Optimisez votre site WordPress pour les moteurs de recherche',
                'presentation' => 'Le SEO (Search Engine Optimization) est essentiel pour améliorer la visibilité de votre site sur les moteurs de recherche.',
                'desc-list' => [
                    'Configurer les permaliens.',
                    'Utiliser les plugins SEO.',
                    'Optimiser le contenu et les images.',
                    'Améliorer la vitesse du site.',
                ],
                'liste' => [
                    [
                        'title' => 'Configurer les permaliens',
                        'details' => 'Les permaliens sont les URLs de vos pages et articles. Utiliser une structure de permalien optimisée peut aider à améliorer le SEO de votre site. WordPress permet de personnaliser cette structure dans les réglages.'
                    ],
                    [
                        'title' => 'Utiliser les plugins SEO',
                        'details' => 'Les plugins SEO comme Yoast SEO ou All in One SEO Pack offrent des outils pour optimiser vos titres, descriptions, et mots-clés, ainsi que pour générer des sitemaps XML et analyser la lisibilité de votre contenu.'
                    ],
                    [
                        'title' => 'Optimiser le contenu et les images',
                        'details' => 'Le contenu de qualité est crucial pour le SEO. Utilisez des mots-clés pertinents, structurez vos articles avec des titres et sous-titres, et optimisez vos images en utilisant des balises ALT descriptives et en compressant les fichiers pour réduire le temps de chargement.'
                    ],
                    [
                        'title' => 'Améliorer la vitesse du site',
                        'details' => 'La vitesse du site est un facteur important pour le SEO. Utilisez des plugins de mise en cache, optimisez vos images, et choisissez un bon hébergeur pour améliorer les temps de chargement de votre site.'
                    ],
                ],
                'category' => 'seo',
                'image' => asset('img/seo.png'),
            ],
            'plugins' => [
                'name' => 'Plugins essentiels pour WordPress',
                'subtitle' => 'Découvrez les plugins indispensables pour votre site WordPress',
                'presentation' => 'Les plugins permettent d\'ajouter des fonctionnalités supplémentaires à votre site WordPress, sans avoir à coder.',
                'desc-list' => [
                    'Plugins pour la sécurité.',
                    'Plugins pour l\'optimisation SEO.',
                    'Plugins pour les réseaux sociaux.',
                    'Plugins pour l\'optimisation des performances.',
                ],
                'liste' => [
                    [
                        'title' => 'Plugins pour la sécurité',
                        'details' => 'La sécurité de votre site est primordiale. Des plugins comme Wordfence et Sucuri Security offrent des fonctionnalités avancées de protection contre les attaques, le malware et les tentatives de connexion non autorisées.'
                    ],
                    [
                        'title' => 'Plugins pour l\'optimisation SEO',
                        'details' => 'Les plugins SEO comme Yoast SEO aident à améliorer la visibilité de votre site sur les moteurs de recherche en optimisant le contenu, les métadonnées et en générant des sitemaps.'
                    ],
                    [
                        'title' => 'Plugins pour les réseaux sociaux',
                        'details' => 'Les plugins de réseaux sociaux permettent de partager facilement votre contenu sur différentes plateformes. Des plugins comme Social Snap et Monarch offrent des boutons de partage personnalisables et des statistiques de partage.'
                    ],
                    [
                        'title' => 'Plugins pour l\'optimisation des performances',
                        'details' => 'Pour améliorer la vitesse de votre site, des plugins comme WP Super Cache et W3 Total Cache aident à réduire les temps de chargement en mettant en cache vos pages et en optimisant la livraison des contenus.'
                    ],
                ],
                'category' => 'plugins',
                'image' => asset('img/plugins.jpeg'),
            ],
            'security' => [
                'name' => 'Sécuriser son site WordPress',
                'subtitle' => 'Protégez votre site des menaces en ligne',
                'presentation' => 'Protégez votre site WordPress des attaques malveillantes avec ces conseils de sécurité essentiels.',
                'desc-list' => [
                    'Installer un plugin de sécurité.',
                    'Utiliser des mots de passe forts.',
                    'Sauvegarder régulièrement votre site.',
                    'Limiter les tentatives de connexion.',
                ],
                'liste' => [
                    [
                        'title' => 'Installer un plugin de sécurité',
                        'details' => 'L\'installation d\'un plugin de sécurité comme Wordfence ou iThemes Security est une première étape pour protéger votre site. Ces plugins offrent des fonctionnalités telles que des pare-feux, des scans de malware, et des outils pour bloquer les IP suspectes.'
                    ],
                    [
                        'title' => 'Utiliser des mots de passe forts',
                        'details' => 'Les mots de passe faibles sont une des principales vulnérabilités des sites web. Utilisez des mots de passe complexes et uniques pour vos comptes WordPress et d\'hébergement.'
                    ],
                    [
                        'title' => 'Sauvegarder régulièrement votre site',
                        'details' => 'Assurez-vous de sauvegarder régulièrement votre site pour pouvoir le restaurer en cas d\'attaque ou de problème technique. Des plugins comme UpdraftPlus permettent de planifier des sauvegardes automatiques.'
                    ],
                    [
                        'title' => 'Limiter les tentatives de connexion',
                        'details' => 'Limitez le nombre de tentatives de connexion à votre tableau de bord WordPress pour éviter les attaques par force brute. Des plugins comme Login LockDown peuvent vous aider à mettre en place cette mesure de sécurité.'
                    ],
                ],
                'category' => 'security',
                'image' => asset('img/security.jpeg'),
            ],
            'backup' => [
                'name' => 'Sauvegarde de votre site WordPress',
                'subtitle' => 'Protégez vos données',
                'presentation' => 'Apprenez à effectuer des sauvegardes régulières pour protéger votre contenu et restaurer votre site en cas de problème.',
                'desc-list' => [
                    'Pourquoi les sauvegardes sont importantes.',
                    'Choisir un plugin de sauvegarde.',
                    'Configurer des sauvegardes automatiques.',
                    'Restaurer un site à partir d\'une sauvegarde.',
                ],
                'liste' => [
                    [
                        'title' => 'Pourquoi les sauvegardes sont importantes',
                        'details' => 'Les sauvegardes régulières vous permettent de restaurer votre site en cas de problème majeur comme une attaque ou une erreur humaine. Ne pas avoir de sauvegarde peut entraîner la perte de données précieuses.'
                    ],
                    [
                        'title' => 'Choisir un plugin de sauvegarde',
                        'details' => 'Il existe plusieurs plugins de sauvegarde pour WordPress, tels que UpdraftPlus, BackWPup, et Duplicator. Choisissez-en un qui correspond à vos besoins en termes de fréquence et de méthode de sauvegarde (locale ou cloud).'
                    ],
                    [
                        'title' => 'Configurer des sauvegardes automatiques',
                        'details' => 'Une fois le plugin de sauvegarde installé, configurez-le pour effectuer des sauvegardes automatiques régulières. Assurez-vous que les sauvegardes incluent la base de données, les fichiers médias, les plugins, et le thème.'
                    ],
                    [
                        'title' => 'Restaurer un site à partir d\'une sauvegarde',
                        'details' => 'En cas de problème, vous pouvez utiliser votre plugin de sauvegarde pour restaurer rapidement votre site à partir d\'une sauvegarde précédente. Cela permet de minimiser les temps d\'arrêt et les pertes de données.'
                    ],
                ],
                'category' => 'backup',
                'image' => asset('img/backup.jpeg'),
            ],
            'performance' => [
                'name' => 'Améliorer la performance de votre site WordPress',
                'subtitle' => 'Optimisez la vitesse et la réactivité',
                'presentation' => 'Optimisez la vitesse de chargement de votre site pour une meilleure expérience utilisateur et un meilleur référencement.',
                'desc-list' => [
                    'Utiliser un plugin de mise en cache.',
                    'Optimiser les images.',
                    'Minifier le CSS et le JavaScript.',
                    'Choisir un hébergeur performant.',
                ],
                'liste' => [
                    [
                        'title' => 'Utiliser un plugin de mise en cache',
                        'details' => 'La mise en cache permet de réduire les temps de chargement en stockant des versions statiques de vos pages. Des plugins comme W3 Total Cache ou WP Super Cache sont populaires et efficaces pour cela.'
                    ],
                    [
                        'title' => 'Optimiser les images',
                        'details' => 'Les images non optimisées peuvent ralentir votre site. Utilisez des outils comme Imagify ou Smush pour compresser vos images sans sacrifier leur qualité.'
                    ],
                    [
                        'title' => 'Minifier le CSS et le JavaScript',
                        'details' => 'La minification réduit la taille des fichiers CSS et JavaScript en supprimant les espaces inutiles, ce qui peut accélérer le chargement des pages. Des plugins comme Autoptimize peuvent automatiser ce processus.'
                    ],
                    [
                        'title' => 'Choisir un hébergeur performant',
                        'details' => 'L\'hébergeur que vous choisissez a un impact majeur sur la performance de votre site. Optez pour un hébergement WordPress spécialisé avec des serveurs optimisés pour des temps de réponse rapides.'
                    ],
                ],
                'category' => 'performance',
                'image' => asset('img/performance.jpeg'),
            ],
            'ecommerce' => [
                'name' => 'Créer une boutique en ligne avec WordPress',
                'subtitle' => 'Lancez votre e-commerce facilement',
                'presentation' => 'Transformez votre site WordPress en une boutique en ligne performante grâce à WooCommerce.',
                'desc-list' => [
                    'Installer et configurer WooCommerce.',
                    'Choisir un thème adapté au e-commerce.',
                    'Gérer les produits et les commandes.',
                    'Optimiser le site pour les ventes.',
                ],
                'liste' => [
                    [
                        'title' => 'Installer et configurer WooCommerce',
                        'details' => 'WooCommerce est le plugin le plus populaire pour créer une boutique en ligne avec WordPress. Après l\'installation, suivez l\'assistant de configuration pour définir les paramètres de base comme la devise, les options de paiement, et les frais de livraison.'
                    ],
                    [
                        'title' => 'Choisir un thème adapté au e-commerce',
                        'details' => 'Choisissez un thème compatible avec WooCommerce qui met en valeur vos produits et offre une expérience utilisateur fluide. Il existe de nombreux thèmes dédiés au e-commerce, gratuits ou premium.'
                    ],
                    [
                        'title' => 'Gérer les produits et les commandes',
                        'details' => 'WooCommerce permet de gérer facilement vos produits, qu\'il s\'agisse de produits physiques ou numériques. Vous pouvez suivre les commandes, gérer les stocks, et proposer différentes options de livraison et de paiement.'
                    ],
                    [
                        'title' => 'Optimiser le site pour les ventes',
                        'details' => 'Utilisez des techniques comme l\'optimisation des pages produits, l\'amélioration du processus de paiement, et la mise en place de stratégies de marketing (comme les codes de réduction et les campagnes d\'email) pour augmenter vos ventes.'
                    ],
                ],
                'category' => 'ecommerce',
                'image' => asset('img/ecommerce.jpeg'),
            ],
        ];

        if (!array_key_exists($article, $articles)) {
            abort(404);
        }

        return view('articles.show', ['article' => $articles[$article]]);
    }
}
