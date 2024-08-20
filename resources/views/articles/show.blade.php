@vite('resources/css/projects.css')
@vite('resources/css/app.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <section>
                    <h5 class="heading-primary-portfolio">{{ $article['category'] }}</h5>
                    <h1 class="heading-secondary">{{ $article['subtitle'] }}</h1>
                    @if(isset($article['image']))
                        <img src="{{ asset($article['image']) }}" alt="{{ $article['name'] }}" class="project-image" style="margin-left:140px">
                    @endif

                    <div class="project-details">
                        <h2 class="title-list">Présentation</h2>
                        <div class="project-description">
                            <p>{{ $article['presentation'] }}</p>
                            @foreach($article['desc-list'] as $task)
                                <p class="desc-list">{{ $task }}</p>
                            @endforeach
                        </div>
                        <h2 class="title-list">Explications</h2>
                        <div class="project-taches">
                            <ul>
                                @foreach($article['liste'] as $task)
                                    <li>
                                        <strong>{{ $task['title'] }}</strong>
                                        <p>{{ $task['details'] }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <a class="return-button" href="{{ route('articles.index') }}">Retour à la liste des articles</a>
        </div>
    </div>
</body>

@include('_footer')

