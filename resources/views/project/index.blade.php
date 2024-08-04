 @vite('resources/css/projects.css')

<section>
    <h1>Liste des Projets</h1>
    <p>Bienvenue sur la page dédiée à nos projets ! Ici, vous trouverez un aperçu de tous les projets récents et en cours que nous avons réalisés. Que vous soyez un client potentiel, un partenaire ou simplement curieux de connaître notre travail, cette liste vous donnera un aperçu des diverses initiatives que nous avons entreprises.</p>

    <p>Nous nous engageons à fournir des solutions innovantes et de haute qualité dans chaque projet. En cliquant sur les titres des projets ci-dessous, vous pourrez accéder à des détails supplémentaires sur chaque projet, y compris les objectifs, les défis rencontrés, et les résultats obtenus.</p>

    <p>N'hésitez pas à explorer chaque projet pour mieux comprendre notre expertise et la manière dont nous abordons les différents défis. Nous sommes fiers de notre travail et sommes impatients de partager nos réussites avec vous.</p>

    <ul>
        @foreach ($projects as $slug => $project)
            <li>
                <a href="{{ route('projects.show', $slug) }}" class="project-link">
                    {{ $project['title'] }}
                </a>
            </li>
        @endforeach
    </ul>

    <p>Pour toute question ou demande de renseignements supplémentaires, n'hésitez pas à nous contacter. Nous serons ravis de discuter de nos projets en détail et de vous aider à trouver des solutions adaptées à vos besoins.</p>
</section>