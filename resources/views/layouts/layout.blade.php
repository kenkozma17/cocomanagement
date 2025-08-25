<!doctype html>
<html lang="{{ $page->short_locale }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="{{$page->meta_title}}">
    <meta name="description" content="{{$page->meta_description}}">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="{{$page->meta_title}}">
    <meta property="og:description" content="{{$page->meta_description}}">
    <meta property="og:image" content="{{$page->meta_image}}">
    <meta property="og:url" content="{{$page->canonical_url}}">
    <meta property="og:type" content="website">

    <!-- Twitter Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{$page->meta_title}}">
    <meta name="twitter:description" content="{{$page->meta_description}}">
    <meta name="twitter:image" content="{{$page->meta_image}}">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;600;700&display=swap" rel="stylesheet">


    <!-- Json LD -->
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "{{ $page->meta_title ?? $page->title }}",
        "description": "{{ $page->meta_description ?? '' }}",
        "url": "{{ $page->canonical_url ?? request()->url() }}"
        }
    </script>

    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ $page->canonical_url }}" />

    <title>{{ $page->title ?? $page->name }}</title>

    @vite(['resources/js/site.js', 'resources/css/site.css'])
</head>
<body class="font-sans leading-normal">
    <x-navigation-bar :context="$__data" />
    <div class="relative md:mt-[10rem] mt-[8rem]">
        @yield('template_content')
    </div>
    <x-footer :context="$__data" />
</body>
</html>
