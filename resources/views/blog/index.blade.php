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

                    <div class="mt-8">
                        @if ($posts->count())
                            <ul>
                                @foreach ($posts as $post)
                                    <li class="mb-4">
                                        <h2 class="text-xl font-bold">
                                            <a href="{{ route('blog.show', ['slug' => $post->slug, 'id' => $post->id]) }}">
                                                {{ $post->title }}
                                            </a>
                                        </h2>
                                        <p class="text-gray-600">
                                            {{ $post->excerpt }}
                                        </p>
                                    </li>
                                @endforeach
                            </ul>

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
