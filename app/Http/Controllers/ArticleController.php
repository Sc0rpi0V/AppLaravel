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
        'personnalisation' => [
            'title' => 'Personnalisation de thèmes WordPress',
            'excerpt' => 'La personnalisation des thèmes WordPress vous permet de donner une identité unique à votre site.',
            'category' => 'customization',
        ],
        'seo' => [
            'title' => 'SEO pour WordPress',
            'excerpt' => 'Le SEO (Search Engine Optimization) est essentiel pour améliorer la visibilité de votre site sur les moteurs de recherche.',
            'category' => 'seo',
        ],
        'plugins' => [
            'title' => 'Plugins essentiels pour WordPress',
            'excerpt' => 'Les plugins permettent d\'ajouter des fonctionnalités supplémentaires à votre site WordPress, sans avoir à coder.',
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
        ];

        if (!array_key_exists($article, $articles)) {
            abort(404);
        }

        return view('articles.show', ['article' => $articles[$article]]);
    }
}
