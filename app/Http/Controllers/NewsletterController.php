<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubmission;
use Carbon\Carbon;

class NewsletterController extends Controller
{
    protected $newsletters = [
        'opti-news' => [
            'title' => 'Optimisation des Performances de WordPress',
            'subtitle' => 'Améliorez les Performances de Votre Site WordPress',
            'description' => '
                Optimiser l\'interface du back-office WordPress peut considérablement améliorer votre expérience de gestion 
                de contenu. Personnalisez l\'interface en fonction de vos préférences : organisez les menus, masquez les éléments 
                inutiles et utilisez des plugins pour améliorer l\'ergonomie.',
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
            'info' => 'Pour plus de conseils sur l\'optimisation de WordPress, suivez notre blog ou contactez notre support.',
            'number' => '1',
        ],
        'seo-news' => [
            'title' => 'Gestion du SEO pour WordPress',
            'subtitle' => 'Boostez votre SEO sur WordPress',
            'description' => '
                La gestion efficace du contenu passe également par l\'utilisation de catégories, d\'étiquettes, et de menus 
                personnalisés pour organiser vos pages et articles. Utilisez l\'éditeur de blocs pour créer des mises en page 
                visuellement attrayantes et intégrez des médias facilement. De plus, l\'optimisation du contenu pour le 
                référencement (SEO) est essentielle pour augmenter la visibilité de votre site. Des plugins comme Yoast SEO ou 
                RankMath peuvent vous aider à optimiser vos articles pour les moteurs de recherche.',
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
            'number' => '2',
        ],
        'secu-news' => [
            'title' => 'Sécurisation de votre site WordPress',
            'subtitle' => 'Protégez votre site contre les menaces',
            'description' => '
                Mettez régulièrement à jour WordPress, les thèmes et les plugins pour protéger votre site contre les vulnérabilités 
                de sécurité. Utilisez des plugins de sécurité pour renforcer la protection, comme des pare-feu ou encore des 
                scanners de malware. La sauvegarde régulière de votre site est également cruciale pour récupérer vos données 
                en cas de problème.
                En outre, surveillez la santé de votre site via l\'outil "Wordfence Security" dans WordPress, qui fournit des 
                informations importantes sur les problèmes de performance et de sécurité. Une bonne pratique consiste à effectuer 
                des audits de sécurité réguliers et à rester informé des dernières pratiques de sécurité WordPress.',
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
            'number' => '3',
        ],
        'save-news' => [
            'title' => 'Sauvegarde de votre site WordPress',
            'subtitle' => 'Assurez la pérennité de vos données',
            'description' => '
                Les menaces de diverses cyberattaques ont augmenté au fil des ans. C\'est particulièrement vrai pour 
                les sites web WordPress, car ils constituent la cible d\'attaque la plus populaire en raison de la popularité du CMS.
                Les attaques telles que les logiciels malveillants ou le piratage peuvent interrompre la fonctionnalité d\'un site, 
                voire effacer toutes ses données.
                L\'une des méthodes les plus efficaces pour résoudre ce problème est de sauvegarder votre site internet. Cela vous 
                permettra de restaurer les données à partir d\'une certaine date et de sauver le site internet ainsi que la plupart, 
                sinon la totalité, de son contenu.',
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
            'number' => '4',
        ],
        'plugins-news' => [
            'title' => 'Les Meilleurs Plugins WordPress',
            'subtitle' => 'Améliorez les fonctionnalités de votre site',
            'description' => '
                A l\'aide d\'extensions, également appelées Plugins en anglais, il est possible de conférer des fonctionnalités 
                supplémentaires à sa page WordPress et ainsi d\'élargir le noyau du logiciel évoqué précédemment. La rubrique 
                "Répertoire des extensions", met à disposition un aperçu des extensions disponibles. L\'installation se fait 
                via le panneau d\'administration. C\'est aussi le cas de la gestion des plugins, leur désactivation, leur 
                suppression et les mises à jour à installer régulièrement',
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
            'number' => '5',
        ],
        'bdd-news' => [
            'title' => 'Gestion de la Base de Données WordPress',
            'subtitle' => 'Optimisez et sécurisez votre base de données',
            'description' => '
                MySQL est un logiciel libre (open source) de gestion de base de données proposé par la plupart des 
                fournisseurs d\'accès à Internet comme base de données sur leurs propres serveurs. Les données ne 
                peuvent pas être ajoutées, modifiées ou retirées sur des sites Web sans un tel système DMS, ce qui 
                est la condition de base de toute présentation Web dynamique. Il est de ce fait impossible de réaliser 
                un blog WordPress sans MySQL.',
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
            'number' => '6',
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
            'number' => '7',
        ],
        'categorie-news' => [
            'title' => 'Gestion des Catégories sur WordPress',
            'subtitle' => 'Organisez efficacement votre contenu',
            'description' => '
                Une catégorie est une des taxonomies par défaut dans WordPress. Contrairement aux étiquettes, 
                les catégories sont obligatoires. Elles permettent de trier et regrouper des articles en fonction de leur thématique.
                Dans le cas d\'un blog sur l\'actualité, on peut retrouver les catégories "Sports", "Politique", "Culture", "Économie"…
                Pour affiner le classement et améliorer sa navigation, nous pourrions également créer une catégorie enfant 
                (sous-catégorie) comme "Tennis". Cela permet de hiérarchiser le contenu.',
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
            'number' => '8',
        ],
        'taxonomy-news' => [
            'title' => 'Utilisation des Taxonomies sur WordPress',
            'subtitle' => 'Maximisez l\'organisation de votre contenu',
            'description' => '
                Dans WordPress, les taxonomies sont des groupes thématiques qui permettent de classer 
                le contenu sur un site. Pour les articles, il en existe deux types par défaut dans 
                WordPress : les catégories et les étiquettes.
                Les étiquettes sont facultatives et ne peuvent pas être hiérarchiques. Ces dernières 
                permettent d\'offrir un autre type de classification des articles (si les catégories ne sont pas suffisantes).
                En revanche, les pages n\'ont pas de taxonomie.',
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
            'number' => '9',
        ],
        'roles-news' => [
            'title' => 'Gestion des Rôles et Permissions sur WordPress',
            'subtitle' => 'Contrôlez l\'accès à votre site',
            'description' => '
                La gestion des utilisateurs est un aspect crucial du back-office WordPress.
                WordPress propose différents rôles pour les utilisateurs : Administrateur, Éditeur, 
                Auteur, Contributeur, et Abonné. Chaque rôle a des capacités spécifiques, par exemple, 
                l\'administrateur a un accès complet au site, tandis que l\'abonné, lui, aura des droits 
                limités. Il est important d\'attribuer le bon rôle à chaque utilisateur pour maintenir la 
                sécurité et l\'efficacité de la gestion du site.',
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
            'number' => '10',
        ],
        'themes-news' => [
            'title' => 'Choix et Personnalisation des Thèmes WordPress',
            'subtitle' => 'Créez un site unique avec les bons thèmes',
            'description' => '
                Les thèmes sont les modèles de design et de présentation des pages WordPress, également appelés 
                design templates. Le site WordPress, met à disposition un très grand choix de thèmes gratuits, 
                allant de la simple apparence de blog jusqu\'à la mise en page de sites commerciaux professionnels. 
                Bienentendu, il existe également des versions payantes. Un nouveau thème peut s\'activer très 
                facilement en suivant "Apparence > Thèmes". Il y a aussi la possibilité de créer son propre thème 
                ou d\'individualiser un thème existant en adaptant le design. Il est pour cela très avantageux d\'avoir 
                des connaissances de base dans les domaines HTML, CSS ou encore PHP.',
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
            'number' => '11',
        ],
        'widgets-news' => [
            'title' => 'Gestion des Widgets sur WordPress',
            'subtitle' => 'Personnalisez votre site avec des widgets',
            'description' => '
                Les widgets sont des éléments isolés, qui sont intégrés directement dans la barre 
                latérale ou en pied de page. Les widgets classiques sont par exemple le calendrier, 
                un encadré comportant les derniers articles, des commentaires ou des zones de saisie 
                de texte ou encore une fonction de recherche. Les Widgets sont gérés dans la partie 
                administration et peuvent être placés partout sur vos pages Web par "glisser-déposer".',
            'desc-questions' => [
                'Pourquoi utiliser des widgets sur WordPress ?',
                '1. Ajoutez des fonctionnalités avec des widgets',
                '2. Organisez vos widgets de manière optimale',
                '3. Utilisez des plugins pour des widgets avancés'
            ],
            'desc-responses' => [
                'Les widgets permettent d\'ajouter facilement des fonctionnalités supplémentaires à votre site, comme des barres latérales, des menus ou des sections personnalisées.',
                'Placez stratégiquement vos widgets pour améliorer l\'expérience utilisateur. Pensez à l\'ergonomie et à la facilité d\'accès pour les visiteurs.',
                'Il existe de nombreux plugins qui offrent des widgets avancés pour enrichir votre site. Explorez des options comme Widget Options ou Custom Sidebars pour plus de contrôle.',
            ],
            'info' => 'Pour plus de conseils sur l\'utilisation des widgets, consultez notre guide détaillé.',
            'number' => '12',
        ],
        'permalink-news' => [
            'title' => 'Optimisation des Permaliens sur WordPress',
            'subtitle' => 'Améliorez la structure de vos URLs',
            'description' => '
                Un permalien (permalink) est un hyperlien (hyperlink) qui renvoie de manière permanente 
                à une autre page Internet. Dans les réglages du tableau de bord, il est possible de définir 
                la structure des liens permanents pour sa page WordPress en sélectionnant l\'option "Permaliens". 
                Le nom d\'un article peut ainsi être utilisé pour créer un lien. Les contenus peuvent être numérotés 
                mais on peut aussi leur attribuer un numéro d\'identification explicite (ID).',
            'desc-questions' => [
                'Pourquoi les permaliens sont-ils importants pour le SEO ?',
                '1. Choisissez une structure de permalien adaptée',
                '2. Évitez les permaliens par défaut',
                '3. Redirigez les anciennes URLs après modification'
            ],
            'desc-responses' => [
                'Les permaliens influencent directement le SEO de votre site en affectant la lisibilité et l\'indexation de vos pages par les moteurs de recherche.',
                'Optez pour une structure de permalien simple et descriptive, incluant des mots-clés pertinents. Évitez les structures avec des caractères spéciaux ou des chiffres.',
                'Ne laissez pas les permaliens par défaut comme "?p=123". Utilisez des permaliens "post name" pour un meilleur SEO.',
                'Si vous modifiez la structure de vos permaliens, utilisez un plugin de redirection pour éviter les erreurs 404 et conserver votre référencement.',
            ],
            'info' => 'Pour en savoir plus sur les meilleures pratiques des permaliens, consultez notre blog.',
            'number' => '13',
        ],
        'website-news' => [
            'title' => 'Généralités sur la Gestion de votre Site WordPress',
            'subtitle' => 'Assurez le bon fonctionnement de votre site web',
            'description' => '
                WordPress est ce que l\'on appelle un système de gestion de contenu (CMS pour Content Management System). 
                Un CMS est un logiciel destiné à la gestion, à la création et à la maintenance de contenus numériques, 
                généralement utilisés sur des sites Web. La plupart des systèmes de gestion de contenu peuvent être 
                utilisés sans connaissances approfondies en programmation, ce qui les rend accessibles pour les débutants 
                dans le domaine du développement Web.',
            'desc-questions' => [
                'Quelles sont les pratiques essentielles pour gérer un site WordPress ?',
                '1. Maintenez votre site à jour',
                '2. Surveillez les performances de votre site',
                '3. Assurez la sécurité de votre site'
            ],
            'desc-responses' => [
                'La gestion d\'un site WordPress nécessite une attention constante pour garantir son bon fonctionnement et sa sécurité.',
                'Effectuez régulièrement les mises à jour de WordPress, des plugins, et des thèmes pour bénéficier des dernières fonctionnalités et correctifs de sécurité.',
                'Utilisez des outils comme Google Analytics et des plugins de surveillance pour suivre les performances de votre site et identifier les problèmes potentiels.',
                'Mettez en place des mesures de sécurité, comme l\'utilisation de SSL, la gestion des utilisateurs, et des sauvegardes régulières, pour protéger votre site contre les menaces.',
            ],
            'info' => 'Pour une gestion optimale de votre site, suivez nos articles et recommandations sur notre blog.',
            'number' => '14',
        ],
    ];

    public function show($slug)
    {
        if (!array_key_exists($slug, $this->newsletters)) {
            return response()->json(['error' => 'Newsletter not found'], 404);
        }

        return view('newsletters.show', ['newsletter' => $this->newsletters[$slug]]);
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // Enregistrer la soumission
        NewsletterSubmission::create([
            'email' => $request->input('email'),
            'submitted_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Vous êtes maintenant inscrit à la newsletter !');
    }

    public function index()
    {
        $latestSubmission = NewsletterSubmission::latest('submitted_at')->first();

        // Assurez-vous que `submitted_at` est un objet `Carbon`
        if ($latestSubmission && !$latestSubmission->submitted_at instanceof \Carbon\Carbon) {
            $latestSubmission->submitted_at = \Carbon\Carbon::parse($latestSubmission->submitted_at);
        }

        $firstNewsletter = collect($this->newsletters)->first();

        return view('newsletter', [
            'latestSubmission' => $latestSubmission,
            'firstNewsletter' => $firstNewsletter,
        ]);
    }
}