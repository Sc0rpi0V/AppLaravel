@vite('resources/css/app.css')
@vite('resources/css/projects.css')
@include('_head')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <section>
                    <h5 class="heading-primary-portfolio">
                        {{ is_array($blog['category']) ? implode(', ', $blog['category']) : $blog['category'] }}
                    </h5>
                    <h1 class="heading-secondary">{{ $blog['subtitle'] }}</h1>
                    @if(isset($blog['image']))
                        <img src="{{ asset($blog['image']) }}" alt="{{ $blog['name'] }}" class="project-image">
                    @endif
                    
                    <div class="project-details">
                        <h2 class="title-list">Présentation</h2>
                        <div class="project-description">
                            <p>{{ $blog['description'] }}</p>
                            @foreach($blog['desc-list'] as $task)
                                <p class="desc-list">{{ $task }}</p>
                            @endforeach
                        </div>

                        <h2 class="title-list">Guide d'utilisation</h2>
                        <div class="project-content">
                            @foreach($blog['content'] as $section)
                                <h3 class="section-title">{{ $section['title'] }}</h3>
                                @if(is_array($section['text']))
                                    @foreach($section['text'] as $key => $content)
                                        @if(is_array($content))
                                            <h4 class="subtitle">{{ $content['subtitle'] }}</h4>
                                            <p>{{ $content['text'] }}</p>
                                        @else
                                            <p>{{ $content }}</p>
                                        @endif
                                    @endforeach
                                @else
                                    <p>{{ $section['text'] }}</p>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
            <a class="return-button" href="{{ route('blog.index') }}">Retour à la liste des blogs</a>
        </div>
    </div>
</body>

@include('_footer')