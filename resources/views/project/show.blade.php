@vite('resources/css/projects.css')
@vite('resources/css/app.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <section>
                    <h5 class="heading-primary-portfolio">{{ $project['category'] }}</h5>
                    <h1 class="heading-secondary">{{ $project['subtitle'] }}</h1>
                    @if(isset($project['image']))
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['name'] }}" class="project-image">
                    @endif
 
                    <div class="project-details">
                        <h2 class="title-list">Description</h2>
                        <div class="project-description">
                            <p>{{ $project['description'] }}</p>
                            @foreach($project['desc-list'] as $task)
                                <p class="desc-list">{{ $task }}</p>
                            @endforeach
                        </div>
                        <h2 class="title-list">Rôle</h2>
                        <div class="project-role">
                            <p>{{ $project['role'] }}</p>
                        </div>
                        <h2 class="title-list">Tâches</h2>
                        <div class="project-taches">
                            <ul>
                                @foreach($project['liste'] as $task)
                                    <li>{{ $task }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <a class="return-button" href="{{ route('projects.index') }}">Retour à la liste des projets</a>
        </div>
    </div>
</body>

@include('_footer')

