@vite('resources/css/projects.css')
@vite('resources/css/app.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <section>
                    <h5 class="heading-primary-portfolio">Blogs</h5>
                    <h1 class="heading-secondary"><span class="heading-before">Des blogs </span><span class="heading-highlight">à votre disposition </span></h1>
                    <div class="heading-description">
                        <p>Bienvenue sur la page dédiée aux blogs !</p>
                    </div>

                    <div class="projects-grid">
                        @if ($posts->count())
                            @foreach ($posts as $post)
                                <div class="project-card">
                                    <a class="project-link" href="{{ route('blog.show', ['slug' => $post->slug, 'id' => $post->id]) }}">
                                        <h2 class="text-xl font-bold">
                                                {{ $post->title }}
                                        </h2>
                                        <p class="text-gray-600">
                                            {{ $post->excerpt }}
                                        </p>
                                    </a>
                                </div>
                            @endforeach

                            <div class="mt-4">
                                {{ $posts->links() }}
                            </div>
                        @else
                            <p>Aucun article de blog trouvé.</p>
                        @endif
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

@include('_footer')
@include('_sponsor')
