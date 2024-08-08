@vite('resources/css/app.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">

            </div>
        </div>
    </div>
    @include('_footer')
    @include('_sponsor')
</body>