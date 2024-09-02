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

                        <p>N'hésitez pas à explorer chaque blog pour mieux comprendre WordPress et la manière de le rendre plus fluide et optimale.</p>
                    </div>

                    <div class="filter-buttons">
                        <a href="{{ route('blog.index', ['category' => 'all']) }}" class="btn {{ $category === 'all' ? 'active' : '' }}">All</a>
                        <a href= "{{ route('blog.index', ['category' => 'seo'])}}" class="btn {{ $category === 'seo' ? 'active' : '' }}">SEO</a>
                        <a href= "{{ route('blog.index', ['category' => 'backup'])}}" class="btn {{ $category === 'backup' ? 'active' : '' }}">Sauvegarde</a>
                        <a href= "{{ route('blog.index', ['category' => 'custom-fields'])}}" class="btn {{ $category === 'custom-fields' ? 'active' : '' }}">Custom Fields</a>
                        <a href= "{{ route('blog.index', ['category' => 'optimisation'])}}" class="btn {{ $category === 'optimisation' ? 'active' : '' }}">Optimisation</a>
                        <a href= "{{ route('blog.index', ['category' => 'management'])}}" class="btn {{ $category === 'management' ? 'active' : '' }}">Management</a>
                    </div>

                    <div class="projects-grid">
                        @foreach ($blogs as $slug => $blog)
                            <div class="project-card">
                                <a href="{{ route('blog.show', $slug) }}" class="project-link">
                                    <h2>{{ $blog['title'] }}</h2>
                                    <p>{{ $blog['description'] }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </section>
            </div>
        </div>
    </div>
</body>

@include('_footer')

