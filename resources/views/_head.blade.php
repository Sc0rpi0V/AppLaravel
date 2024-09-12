<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>ScorpWPCrea</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico')}}" />
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" sizes="32x32" />
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" sizes="16x16" />
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}" />

<!-- Styles -->
@vite('resources/css/app.css')