@vite('resources/css/projects.css')
@vite('resources/css/app.css')
@include('_head')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <section>
                    <h5 class="heading-primary-portfolio">{{ $project['title'] }}</h5>
                    <h1 class="heading-secondary">{{ $project['subtitle'] }}</h1>
 
                    <div class="project-details">
                        <h2 class="title-list">Description</h2>
                        <div class="project-description">
                            <p>{{ $project['description'] }}</p>
                        </div>
                        <div class="project-taches">
                            @foreach($project['desc-questions'] as $question)
                                <p class="desc-list">{{ $question }}</p>
                            @endforeach
                        </div>
                        <div class="project-taches">
                            @foreach($project['desc-responses'] as $response)
                                <p class="desc-list">{{ $response }}</p>
                            @endforeach
                        </div>
                        <div class="project-description">
                            <p>{{ $project['info'] }}</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

@include('_footer')